<?php

namespace Iqa\CrowdSourcingBundle\Controller;

use Iqa\CrowdSourcingBundle\Entity\Rating;

use Iqa\CrowdSourcingBundle\Entity\config ;
use Iqa\CrowdSourcingBundle\Entity\experiment;
use Iqa\CrowdSourcingBundle\Entity\stimuliInExperiment;
use Iqa\CrowdSourcingBundle\Entity\presentationSession;
use Iqa\CrowdSourcingBundle\Entity\sessionsRatings;
use Iqa\CrowdSourcingBundle\Entity\user;
use Iqa\CrowdSourcingBundle\Entity\ratingLabel;



use Iqa\CrowdSourcingBundle\Entity\Survey;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class IqaController extends Controller
{
	function getRootDir()
	{
		$repository = $this->getDoctrine()
		->getRepository('IqaCrowdSourcingBundle:config');
		$config = $repository->findOneByName('imageRoot');
		return $config->getValue();
	}
	
	function getOrigsDir()
	{
		$repository = $this->getDoctrine()
		->getRepository('IqaCrowdSourcingBundle:config');
		$config = $repository->findOneByName('originalsPath');
		return $this->getRootDir() . DIRECTORY_SEPARATOR . $config->getValue();
	}

	function getConditionsDir()
	{
		$repository = $this->getDoctrine()
		->getRepository('IqaCrowdSourcingBundle:config');
		$config = $repository->findOneByName('conditionsPath');
		return $this->getRootDir() . DIRECTORY_SEPARATOR . $config->getValue();
	}
	
	function getActiveExperimentId()
	{
		$repository = $this->getDoctrine()
		->getRepository('IqaCrowdSourcingBundle:config');
		$config = $repository->findOneByName('activeExperimentId');
		$activeExperimentId = $config->getValue();
		return $activeExperimentId;
	}
	
	function getImageRoot()
	{
		$repository = $this->getDoctrine()
		->getRepository('IqaCrowdSourcingBundle:config');
		$config = $repository->findOneByName('imageRoot');
		$imageRoot = $config->getValue();
		return $imageRoot;
	}
	
	function getActiveExperiment($id)
	{
		$repository = $this->getDoctrine()
		->getRepository('IqaCrowdSourcingBundle:experiment');
		$experiment        = $repository->findOneById($id) ;
		return $experiment ;
	}
	
	function getActiveProcedureName($experiment)
	{
		$repository = $this->getDoctrine()
		->getRepository('IqaCrowdSourcingBundle:procedures');
		return $repository->findOneById($experiment->getProcedureId())->getName();
	}
	
	function getActiveProcedure($experiment)
	{
		$repository = $this->getDoctrine()
		->getRepository('IqaCrowdSourcingBundle:procedures');
		return $repository->findOneById($experiment->getProcedureId()) ;
	}
	
	function getStimuliInExperiment($activeExperimentId)
	{
		$repository = $this->getDoctrine()->getRepository('IqaCrowdSourcingBundle:stimuliInExperiment');
		$stimuliInExperiment = $repository->findBy(array('experimentId'=> $activeExperimentId,'trainingMode'=>false));
		return $stimuliInExperiment ;
	}
	
	function getTrainingStimuliInExperiment($activeExperimentId)
	{
		$repository = $this->getDoctrine()
		->getRepository('IqaCrowdSourcingBundle:stimuliInExperiment');
		$stimuliInExperiment = $repository->findBy(array('experimentId'=> $activeExperimentId,'trainingMode'=>1));
		return $stimuliInExperiment ;
	}
		
	
	public function presentAction(){
		$session = $this->getRequest()->getSession();
		$procedureName 	= $session->get('procedureName');
		
		// enable simultanous rating and presenting -> no duration
		$concurrentRating = $session->get('concurrentRating');
		
		// check if already rated
		if ($session->get('doRating')){
			// samviq forwards the rating from present page
			if (strpos($procedureName,"samviq")!==false){
				$request = $this->get('request');
				$ratings = $request->get('ratings');
				// on reload
				if($ratings == ""){	 
					$session->set('doRating',false);	
				}
				// if submitted
				else{	
					$forward = $this->forward('IqaCrowdSourcingBundle:Iqa:rate', array(
							'request' => $request				
					));
					return $forward;
				}
			}
			elseif($concurrentRating == true){
				
				$request = $this->get('request');
				$rating = $request->get('rating');
				$time = $request->get('time');
				
				// on reload
				if($rating == ""){	 
					$session->set('doRating',false);	
				}
				// if submitted
				else{	
					
					$forward = $this->forward('IqaCrowdSourcingBundle:Iqa:rate', array(
							'rating' => $rating,
							'time'=>$time				
					));
					
					return $forward;
				}
			}
			// default : go to rating page
			return $this->redirect('rate');
		}
		
		$session->set('doRating',true);
			
		$nextIdsIdx = $session->get('nextIdsIdx');
		$thisExperimentsRandomStimuli = $session->get('thisExperimentsRandomStimuli') ;
		
		// special samviq finish check
		if (strpos($procedureName,"samviq")!==false){
			$samviqOrder = $session->get('samviqOrder');
			if ($session->get('nextIdsIdx') >= count($samviqOrder) ){
				// end session
				return $this->redirect('finish');
				$forward = $this->forward('IqaCrowdSourcingBundle:Iqa:finish', array('fin_time' => new \Datetime('now')));
				return $forward;
			}
		}
		
		// session finished when all stimuli rated
		if ($session->get('nextIdsIdx') >= count($thisExperimentsRandomStimuli) ){
			// end session
			return $this->redirect('finish');
			$forward = $this->forward('IqaCrowdSourcingBundle:Iqa:finish', array('fin_time' => new \Datetime('now')));
			return $forward;
		}
		
		$nextFilename  = $thisExperimentsRandomStimuli[$nextIdsIdx]['filename'];
		$height        = $thisExperimentsRandomStimuli[$nextIdsIdx]['height'];
		$width         = $thisExperimentsRandomStimuli[$nextIdsIdx]['width'];
				
		if($concurrentRating == true && (!(strpos($procedureName,'samviq') !== false))){
							
			$sliderLabel=$session->get('ratingLabelNames');

			if (strpos($procedureName,'pc')!==false){
				$nextOriginalFilename = $thisExperimentsRandomStimuli[$nextIdsIdx]['origFilename'] ;
				return $this->render('IqaCrowdSourcingBundle:Iqa:/concurrentRating/pc.html.twig',
						array(
								'filename' => $nextFilename,
								'refFilename'=>$nextOriginalFilename,
								'width'=>$width, 'height'=>$height,
								'usedSliderLabel'=> $sliderLabel,
								'progressBar'=>$session->get('progressBar'),
								'currentImageCount'=>($nextIdsIdx+1),
								'totalNumberOfImages'=>$session->get('totalNumberOfImages'),
								'presentationDuration'=>$session->get('presentationDuration')
						)
				);
			}
			elseif (strpos($procedureName,'numerical')!==false){
				$nextOriginalFilename = $thisExperimentsRandomStimuli[$nextIdsIdx]['origFilename'] ;
				return $this->render('IqaCrowdSourcingBundle:Iqa:/concurrentRating/numeric.html.twig',
						array(
								'filename' => $nextFilename,
								'refFilename'=>$nextOriginalFilename,
								'width'=>$width, 'height'=>$height,
								'progressBar' => $session->get('progressBar'),
								'currentImageCount'=>($nextIdsIdx+1),
								'totalNumberOfImages'=>$session->get('totalNumberOfImages'),
								'presentationDuration'=>$session->get('presentationDuration')
			
						)
				);
			}
			elseif (strpos($procedureName,'acr')!==false){
				if(strpos($procedureName,'11')!==false){
					return $this->render('IqaCrowdSourcingBundle:Iqa:/concurrentRating/single_stim_11.html.twig',
							array(	'filename' => $nextFilename,
									'width'=>$width,
									'height'=>$height,
									'usedSliderLabel'=> $sliderLabel,
									'progressBar' => $session->get('progressBar'),
									'currentImageCount'=>($nextIdsIdx+1),
									'totalNumberOfImages'=>$session->get('totalNumberOfImages'),
									'presentationDuration'=>$session->get('presentationDuration')
							)
					);
				}
				elseif (strpos($procedureName,'100')!==false){
					return $this->render('IqaCrowdSourcingBundle:Iqa:/concurrentRating/single_stim_100.html.twig',
							array(	'filename' => $nextFilename,
									'width'=>$width,
									'height'=>$height,
									'usedSliderLabel'=> $sliderLabel,
									'progressBar' => $session->get('progressBar'),
									'currentImageCount'=>($nextIdsIdx+1),
									'totalNumberOfImages'=>$session->get('totalNumberOfImages'),
									'presentationDuration'=>$session->get('presentationDuration')
							)
					);
				}
				else{
					return $this->render('IqaCrowdSourcingBundle:Iqa:/concurrentRating/single_stim_5.html.twig',
							array(	'filename' => $nextFilename,
									'width'=>$width,
									'height'=>$height,
									'usedSliderLabel'=> $sliderLabel,
									'progressBar' => $session->get('progressBar'),
									'currentImageCount'=>($nextIdsIdx+1),
									'totalNumberOfImages'=>$session->get('totalNumberOfImages'),
									'presentationDuration'=>$session->get('presentationDuration')
							)
					);
				}				
			}
			
			elseif (strpos($procedureName,'dcr')!==false){
				$nextOriginalFilename = $thisExperimentsRandomStimuli[$nextIdsIdx]['origFilename'] ;
				// check simultanous presentation?
				if (strpos($procedureName,'sp')!==false){
					if(strpos($procedureName,'11')!==false){
						return $this->render('IqaCrowdSourcingBundle:Iqa:/concurrentRating/double_stim_sp11.html.twig',
								array(	'filename' => $nextFilename,
										'refFilename'=>$nextOriginalFilename,
										'width'=>$width, 'height'=>$height,
										'usedSliderLabel'=> $sliderLabel,
										'progressBar' => $session->get('progressBar'),
										'currentImageCount'=>($nextIdsIdx+1),
										'totalNumberOfImages'=>$session->get('totalNumberOfImages'),
										'presentationDuration'=>$session->get('presentationDuration')
						));
					}
					elseif (strpos($procedureName,'100')!==false){
						return $this->render('IqaCrowdSourcingBundle:Iqa:/concurrentRating/double_stim_sp100.html.twig',
								array(	'filename' => $nextFilename,
										'refFilename'=>$nextOriginalFilename,
										'width'=>$width, 'height'=>$height,
										'usedSliderLabel'=> $sliderLabel,
										'progressBar' => $session->get('progressBar'),
										'currentImageCount'=>($nextIdsIdx+1),
										'totalNumberOfImages'=>$session->get('totalNumberOfImages'),
										'presentationDuration'=>$session->get('presentationDuration')
								));
					}
					elseif (strpos($procedureName,'minimal')!==false){
						return $this->render('IqaCrowdSourcingBundle:Iqa:/concurrentRating/double_stim_sp_minimal.html.twig',
								array(	'filename' => $nextFilename,
										'refFilename'=>$nextOriginalFilename,
										'width'=>$width, 'height'=>$height,
										'usedSliderLabel'=> $sliderLabel,
										'progressBar' => $session->get('progressBar'),
										'currentImageCount'=>($nextIdsIdx+1),
										'totalNumberOfImages'=>$session->get('totalNumberOfImages'),
										'presentationDuration'=>$session->get('presentationDuration')
								));
					}
					elseif (strpos($procedureName,'9')!==false){
						return $this->render('IqaCrowdSourcingBundle:Iqa:/concurrentRating/double_stim_sp9.html.twig',
								array(	'filename' => $nextFilename,
										'refFilename'=>$nextOriginalFilename,
										'width'=>$width, 'height'=>$height,
										'usedSliderLabel'=> $sliderLabel,
										'progressBar' => $session->get('progressBar'),
										'currentImageCount'=>($nextIdsIdx+1),
										'totalNumberOfImages'=>$session->get('totalNumberOfImages'),
										'presentationDuration'=>$session->get('presentationDuration')
								));
					}
					else{
						return $this->render('IqaCrowdSourcingBundle:Iqa:/concurrentRating/double_stim_sp5.html.twig',
								array(	'filename' => $nextFilename,
										'refFilename'=>$nextOriginalFilename,
										'width'=>$width, 'height'=>$height,
										'usedSliderLabel'=> $sliderLabel,
										'progressBar' => $session->get('progressBar'),
										'currentImageCount'=>($nextIdsIdx+1),
										'totalNumberOfImages'=>$session->get('totalNumberOfImages'),
										'presentationDuration'=>$session->get('presentationDuration')
								));
					}
					
				}
				else{ # no simultanous presentation
					if(strpos($procedureName,'11')!==false){
						return $this->render('IqaCrowdSourcingBundle:Iqa:/concurrentRating/double_stim_11.html.twig',
								array(	'filename' => $nextFilename,
										'refFilename'=>$nextOriginalFilename,
										'width'=>$width, 'height'=>$height,
										'usedSliderLabel'=> $sliderLabel,
										'progressBar' => $session->get('progressBar'),
										'currentImageCount'=>($nextIdsIdx+1),
										'totalNumberOfImages'=>$session->get('totalNumberOfImages'),
										'presentationDuration'=>$session->get('presentationDuration')
						));
					}
					elseif (strpos($procedureName,'100')!==false){
						return $this->render('IqaCrowdSourcingBundle:Iqa:/concurrentRating/double_stim_100.html.twig',
								array(	'filename' => $nextFilename,
										'refFilename'=>$nextOriginalFilename,
										'width'=>$width, 'height'=>$height,
										'usedSliderLabel'=> $sliderLabel,
										'progressBar' => $session->get('progressBar'),
										'currentImageCount'=>($nextIdsIdx+1),
										'totalNumberOfImages'=>$session->get('totalNumberOfImages'),
										'presentationDuration'=>$session->get('presentationDuration')
								));
					}

					
					else{
						return $this->render('IqaCrowdSourcingBundle:Iqa:/concurrentRating/double_stim_5.html.twig',
								array(	'filename' => $nextFilename,
										'refFilename'=>$nextOriginalFilename,
										'width'=>$width, 'height'=>$height,
										'usedSliderLabel'=> $sliderLabel,
										'progressBar' => $session->get('progressBar'),
										'currentImageCount'=>($nextIdsIdx+1),
										'totalNumberOfImages'=>$session->get('totalNumberOfImages'),
										'presentationDuration'=>$session->get('presentationDuration')
								));
					}
				}
					
			}
			
			else{
				return new Response('Ooops, something wrong..... (cr)')	;
			}
		}
		
		if (strpos($procedureName,'acr')!==false){	
			# video test
			if (strpos($procedureName,'video')!==false){
				return $this->render('IqaCrowdSourcingBundle:Iqa:/video/singleStimulusVideo.html.twig',
						array(	'filename' => $nextFilename,
								'width'=>$width, 'height'=>$height,
								'presentationDuration'=>$session->get('presentationDuration'))
				);
			}
			# image test		
			return $this->render('IqaCrowdSourcingBundle:Iqa:/presentation/singleConditionPresentation.html.twig',
					array(	'filename' => $nextFilename,
							'width'=>$width, 
							'height'=>$height,
							'presentationDuration'=>$session->get('presentationDuration'))
					);
		}
		
		elseif (strpos($procedureName,'dcr')!==false){
			$nextOriginalFilename = $thisExperimentsRandomStimuli[$nextIdsIdx]['origFilename'] ;
							
			# simultanous stimuli presentation
			if (strpos($procedureName,'sp')!==false){
				if (strpos($procedureName,'video')!==false){
					return $this->render('IqaCrowdSourcingBundle:Iqa:/video/doubleStimulusVideo_SP.html.twig',
							array(	'filename' => $nextFilename,
									'refFilename'=>$nextOriginalFilename,
									'width'=>$width, 'height'=>$height,
									'presentationDuration'=>$session->get('presentationDuration'))
					);
				}
				return $this->render('IqaCrowdSourcingBundle:Iqa:/presentation/dcr_sp.html.twig',
						array(	'filename' => $nextFilename,
								'refFilename'=>$nextOriginalFilename,
								'width'=>$width, 'height'=>$height,
								'presentationDuration'=>$session->get('presentationDuration'))
						);
			}
			# sequencial stimuli presentation
			else{
				if (strpos($procedureName,'video')!==false){
					return $this->render('IqaCrowdSourcingBundle:Iqa:/video/doubleStimulusVideo.html.twig',
							array(	'filename' => $nextFilename,
									'refFilename'=>$nextOriginalFilename,
									'width'=>$width, 'height'=>$height,
									'presentationDuration'=>$session->get('presentationDuration'))
					);
				}
				return $this->render('IqaCrowdSourcingBundle:Iqa:/presentation/dcr.html.twig',
						array(	'filename' => $nextFilename,
								'refFilename'=>$nextOriginalFilename,
								'width'=>$width, 'height'=>$height,
								'presentationDuration'=>$session->get('presentationDuration'))
				);
			}
					
		}		
		elseif (strpos($procedureName,'pc')!==false){
			$nextOriginalFilename = $thisExperimentsRandomStimuli[$nextIdsIdx]['origFilename'] ;
			return $this->render('IqaCrowdSourcingBundle:Iqa:/presentation/pc.html.twig',
					array(
					'filename' => $nextFilename,
					'refFilename'=>$nextOriginalFilename,
					'width'=>$width, 'height'=>$height,
					'presentationDuration'=>$session->get('presentationDuration'))
					);
				
		}
		elseif (strpos($procedureName,'numerical')!==false){
			$nextOriginalFilename = $thisExperimentsRandomStimuli[$nextIdsIdx]['origFilename'] ;
			return $this->render('IqaCrowdSourcingBundle:Iqa:/presentation/dcr_sp.html.twig',
					array(
							'filename' => $nextFilename,
							'refFilename'=>$nextOriginalFilename,
							'width'=>$width, 'height'=>$height,
							'presentationDuration'=>$session->get('presentationDuration'))
			);
		}
		elseif (strpos($procedureName,'samviq')!==false){
				// enable for debugging to stay on /present
// 				$session->set('doRating',false);
				
				// BUILD UP special samviq structure
				
				$samviqOrder = $session->get('samviqOrder');
// 				print_r($samviqOrder);
				$nextSamviqSetId = $samviqOrder[$nextIdsIdx];
			
				$currentSamviqSet = array();
				
				// gatter all with current samviqID
				foreach ($thisExperimentsRandomStimuli as $key => $value){
					if($value['samviqSet'] == $nextSamviqSetId){
						array_push($currentSamviqSet, $value);	
					}
				}
						
				
				// build up filenames of current samviqSet
				$filenames = array();
				// add original;
				foreach ($currentSamviqSet as $key => $value){
					// add references					
					array_push($filenames, $value);
				}

				$isTraining = $currentSamviqSet[0]['trainingMode'];
				$hiddenRef = $currentSamviqSet[0]['hiddenRef'];
				
				
				// build up original file
				$nextOriginalFilename = $currentSamviqSet[0]['origFilename'];
				$originalFileId = $currentSamviqSet[0]['origId'];							
				$origFile = array(
						'filename'=>$nextOriginalFilename, 
						'isOrig'=>1, 
						'id'=>$originalFileId, 
						'trainingMode'=>$isTraining,
						'hiddenRef'=>$hiddenRef
				);
				array_unshift($filenames, $origFile);

// 				print "<pre>";
// 				print_r($filenames);
// 				print "</pre>";
				
// 				$request = $this->get('request');
// 				echo $request;
				if (strpos($procedureName,'video')!==false){
					return $this->render('IqaCrowdSourcingBundle:Iqa:/video/samviqVideo.html.twig',
							array(
									'filenames' => $filenames,
									'width'=>$width,
									'height'=>$height,
									'currentImageCount'=>($nextIdsIdx+1),
									'totalNumberOfImages'=>count($session->get('samviqOrder')),
									'progressBar'=>$session->get('progressBar'),
									'usedSliderLabel'=>$session->get('ratingLabelNames'))
					);
				}
				else{
					return $this->render('IqaCrowdSourcingBundle:Iqa:/presentation/samviq.html.twig',
							array(
									'filenames' => $filenames,
									'width'=>$width,
									'height'=>$height,
									'currentImageCount'=>($nextIdsIdx+1),
									'totalNumberOfImages'=>count($session->get('samviqOrder')),
									'progressBar'=>$session->get('progressBar'),
									'usedSliderLabel'=>$session->get('ratingLabelNames'))
					);
				}
				
		}
		else{
			return new Response('Ooops, something wrong.....')	;	
		}
	}
	
	
    public function rateAction(){
    	$session = $this->getRequest()->getSession();
    	$nextIdsIdx = $session->get('nextIdsIdx') ;
    	$thisExperimentsRandomStimuli = $session->get('thisExperimentsRandomStimuli') ;
    	$nextStimulusId = $thisExperimentsRandomStimuli[$nextIdsIdx]['id'] ;
    	
    	$presentationSessionId = $session->get('presentationSessionId');
    	$procedureName = $session->get('procedureName');
    	     	
    	// do we have a response?
    	$request = $this->get('request');
    	
//     	echo $request;
    	 
    	// special case SAMVIQ data handling
		if (strpos($procedureName,"samviq")!==false){
    		// write back many results
    		$ratings = json_decode($request->get('ratings'));
    		$time = $request->get('time');
    		
			if ($ratings == null){
				// user reload the page
				return $this->redirect('present');
			}
				
// 			print "<pre>";
// 			print_r($thisExperimentsRandomStimuli);
// 			print "</pre>";    		
    		    		
			// write all ratings
    		foreach ($ratings as $value){
	    		$sessionsRatings = new sessionsRatings() ;
	    		$sessionsRatings->setSessionId($presentationSessionId) ;
	    		$sessionsRatings->setPositionInSession($nextIdsIdx)  ;
	    		$sessionsRatings->setRatingDuration($time);

    			$sessionsRatings->setRatingValue($value->rating);
    			$sessionsRatings->setStimulusId($value->id);
    			$sessionsRatings->setIsOrig($value->isOrig);
    			$sessionsRatings->setTrainingMode($value->trainingMode);
    			$sessionsRatings->setHiddenRef($value->hiddenRef);
    			 
    			// write out one rating
    			$em = $this->getDoctrine()->getManager();
    			$em->persist($sessionsRatings);
    			$em->flush();    			
    		}
    		    		   			    		
    		$session->set('doRating',false);
    		
    		$session->set('nextIdsIdx', $nextIdsIdx + 1);
    		    		
    		return $this->redirect('present');
    	}
    	
    	$request = $this->get('request');
    	$rating = new Rating();
    	$rating = $request->get('rating');
    	$time = $request->get('time');
    	    	
    	$concurrentRating = $session->get('concurrentRating');

    	// special case CONCURRENTRATING
		if($concurrentRating == true){

			$rating = $request->get('rating');
			$time = $request->get('time');
						
// 			return new Response("write to db");
    		
    		if($rating == null){
				// user reload the page
				return $this->redirect('present');
    			
    		}    		
			
//     		return new Response("write to db");
    		
    		$sessionsRatings = new sessionsRatings() ;
    		$sessionsRatings->setSessionId($presentationSessionId) ;
    		$sessionsRatings->setPositionInSession($nextIdsIdx)  ;
    		$sessionsRatings->setRatingValue($rating);
    		$sessionsRatings->setRatingDuration($time);
    		 
    		$sessionsRatings->setStimulusId($nextStimulusId);
    		$sessionsRatings->setIsOrig($thisExperimentsRandomStimuli[$nextIdsIdx]['isOrig']);
    		$sessionsRatings->setTrainingMode($thisExperimentsRandomStimuli[$nextIdsIdx]['trainingMode']);
    		$sessionsRatings->setHiddenRef($thisExperimentsRandomStimuli[$nextIdsIdx]['hiddenRef']);
    		 
    		if(intval($rating) >= 0){
    			// only write back valid ratings
    			$em = $this->getDoctrine()->getManager();
    			$em->persist($sessionsRatings);
    			$em->flush();
    		}
    		else{
    			// if skipped append stimuli to test
    			$stimuliList = $session->get('thisExperimentsRandomStimuli');
    			array_push($stimuliList, $stimuliList[$nextIdsIdx]);
    			$session->set('totalNumberOfImages', ($session->get('totalNumberOfImages')+1));
    			$session->set('thisExperimentsRandomStimuli', $stimuliList);
    		}  		    		
    		
    		$session->set('doRating',false);
    		$session->set('nextIdsIdx',$nextIdsIdx+1);
    		return $this->redirect('present');
			
		}    	
    	
    	
    	    	
    	if($rating != null){
				$sessionsRatings = new sessionsRatings() ;
    			$sessionsRatings->setSessionId($presentationSessionId) ;
    			$sessionsRatings->setPositionInSession($nextIdsIdx)  ;
    			$sessionsRatings->setRatingValue($rating);
    			$sessionsRatings->setRatingDuration($time);
    			
    			$sessionsRatings->setStimulusId($nextStimulusId);
    			$sessionsRatings->setIsOrig($thisExperimentsRandomStimuli[$nextIdsIdx]['isOrig']);    			
    			$sessionsRatings->setTrainingMode($thisExperimentsRandomStimuli[$nextIdsIdx]['trainingMode']);				
    			$sessionsRatings->setHiddenRef($thisExperimentsRandomStimuli[$nextIdsIdx]['hiddenRef']);
    			
    			if(intval($rating) >= 0){
    				// only write back valid ratings
	    			$em = $this->getDoctrine()->getManager();
	    			$em->persist($sessionsRatings);
	    			$em->flush();
    			}
    			else{
    				// if skipped append stimuli to test
    				$stimuliList = $session->get('thisExperimentsRandomStimuli');
    				array_push($stimuliList, $stimuliList[$nextIdsIdx]);
    				$session->set('totalNumberOfImages', ($session->get('totalNumberOfImages')+1));
    				$session->set('thisExperimentsRandomStimuli', $stimuliList);
    			}
    			 
    			$session->set('doRating',false);
    			$session->set('nextIdsIdx',$nextIdsIdx+1);
    			return $this->redirect('present');    		
    	}	

    	$debugText='';
    	$sliderLabel=$session->get('ratingLabelNames');
    	 
    		 
    	if (strpos($procedureName,'pc') !== false){
    		return $this->render('IqaCrowdSourcingBundle:Iqa:/rating/ratingViewChooser.html.twig',array(
    				'currentImageCount'=>($nextIdsIdx+1),
    				'totalNumberOfImages'=>$session->get('totalNumberOfImages'),
    				'progressBar' => $session->get('progressBar'),
    				'debugText' => $debugText));
    	}
    	elseif (strpos($procedureName,'numerical')!==false){
    		return $this->render('IqaCrowdSourcingBundle:Iqa:/rating/ratingViewNumerical.html.twig',array(
    				'usedSliderLabel'=> $sliderLabel,
    				'quantization' => $session->get('quantization'),
    				'progressBar'=>$session->get('progressBar'),
    				'currentImageCount'=>($nextIdsIdx+1),
    				'totalNumberOfImages'=>$session->get('totalNumberOfImages'),
    				'debugText' => $debugText));
    		
    	}
    	elseif (strpos($procedureName,'samviq')!==false){
    		 return new Response("won't happen!");
    	}
    	elseif ((strpos($procedureName,'dcr')!==false) || ((strpos($procedureName,'acr')!==false))) {
			// choose rating systeme for dcr
    		if (strpos($procedureName,'min')!==false){
    			return $this->render('IqaCrowdSourcingBundle:Iqa:/rating/ratingViewSlider100Minimal.html.twig',array(
    					'usedSliderLabel'=> $sliderLabel,
    					'quantization' => $session->get('quantization'),
    					'progressBar'=>$session->get('progressBar'),
    					'currentImageCount'=>($nextIdsIdx+1),
    					'totalNumberOfImages'=>$session->get('totalNumberOfImages'),
    					'debugText' => $debugText));
    		}
    		elseif (strpos($procedureName,'100')!==false){
	    		return $this->render('IqaCrowdSourcingBundle:Iqa:/rating/ratingViewSlider100.html.twig',array(
    				'usedSliderLabel'=> $sliderLabel,
    				'quantization' => $session->get('quantization'),
	    			'progressBar'=>$session->get('progressBar'),
	    			'currentImageCount'=>($nextIdsIdx+1),
	    			'totalNumberOfImages'=>$session->get('totalNumberOfImages'),
    				'debugText' => $debugText));
    		}
    		elseif (strpos($procedureName,'11')!==false){
    			return $this->render('IqaCrowdSourcingBundle:Iqa:/rating/ratingViewSlider11.html.twig',array(
    					'usedSliderLabel'=> $sliderLabel,
    					'quantization' => $session->get('quantization'),
    					'progressBar'=>$session->get('progressBar'),
    					'currentImageCount'=>($nextIdsIdx+1),
    					'totalNumberOfImages'=>$session->get('totalNumberOfImages'),
    					'debugText' => $debugText));
    		}
    		elseif (strpos($procedureName,'9')!==false){
    			return $this->render('IqaCrowdSourcingBundle:Iqa:/rating/ratingViewSlider9.html.twig',array(
    					'usedSliderLabel'=> $sliderLabel,
    					'quantization' => $session->get('quantization'),
    					'progressBar'=>$session->get('progressBar'),
    					'currentImageCount'=>($nextIdsIdx+1),
    					'totalNumberOfImages'=>$session->get('totalNumberOfImages'),
    					'debugText' => $debugText));
    		}
    		else{
    			return $this->render('IqaCrowdSourcingBundle:Iqa:/rating/ratingViewSlider5.html.twig',array(
    					'usedSliderLabel'=> $sliderLabel,
    					'quantization' => $session->get('quantization'),
    					'progressBar'=>$session->get('progressBar'),
    					'currentImageCount'=>($nextIdsIdx+1),
    					'totalNumberOfImages'=>$session->get('totalNumberOfImages'),
    					'debugText' => $debugText));
    		}    		
    	}
    	else{
    		return $this->render('IqaCrowdSourcingBundle:Iqa:/rating/ratingViewSlider5.html.twig',array(
    				'usedSliderLabel'=> $sliderLabel,
    				'quantization' => $session->get('quantization'),
    				'progressBar'=>$session->get('progressBar'),
    				'currentImageCount'=>($nextIdsIdx+1),
    				'totalNumberOfImages'=>$session->get('totalNumberOfImages'),
    				'debugText' => $debugText));
    	}
    	
    	
   }
    
    public function welcomeAction($experimentId)
    {	
    		   	 
    	 	// generate session
	    	$session = $this->getRequest()->getSession();
	    	
	    	if ($experimentId == 'iqa'){
	    		$activeExperimentId = $this->getActiveExperimentId() ;
	    	}
	    	else {
	    		$activeExperimentId = $experimentId;
	    	}
	    	
	    	$activeExperiment  = $this->getActiveExperiment($activeExperimentId);
	    	
	    	if($experimentId == 404){
	    		return $this->render('IqaCrowdSourcingBundle:Iqa:finishPage404.html.twig',
    			array( 'surveyTitle'=>$session->get('surveyTitle')) );
	    	}
	    	
	    	// some checks for url spoofing
	    	if($activeExperiment == null){
	    		throw $this->createNotFoundException('404');
	       	}
	       	
	  	       	
	    	$user_ip = $this->container->get('request')->getClientIp();
	    	$labip = "172.17.17.138";
	    	$localhost = "127.0.0.1";
	    	$localhostV6 = "::1";    	
	    	// missing IPv6 check
	    	
	    	if($activeExperiment->getLabCondition() == true){
	    		if($user_ip == $localhost OR $user_ip == $labip OR $user_ip == $localhostV6){
					// all good, go on
	    		}
	    		else{
	    			// no access
	    			echo $user_ip;
	    			throw $this->createNotFoundException('404');
	    		}
	    		
	    	}
	    		    	
	    	$activeProcedure     = $this->getActiveProcedure($activeExperiment) ;
	    	$procedureName       = $activeProcedure->getName();
	    	$ratingLabelNames    = explode(';',$activeProcedure->getLabelNames());
	    	$numConcurrentPresentations = $activeProcedure->getNumConCurrStim();
	    	
	    	if (is_null($activeExperiment->getPresentationDuration())){ // default value
	    		$stimPresentationDuration   = $activeProcedure->getPresentationDuration();
	    	}
	    	else{
	    		$stimPresentationDuration   = $activeExperiment->getPresentationDuration();
	    	}
	    	
	    	if (is_null($activeExperiment->getNumRepetitions())){ //default value
	    		$numberOfReplications = $activeProcedure->getNumRepetitions();
	    	}
	    	else{
	    		$numberOfReplications = $activeExperiment->getNumRepetitions();
	    	}
	    	
	    	$origDir    = $this->getOrigsDir();
	    	$condDir    = $this->getConditionsDir() ;
	    	
	    	$useHiddenReference  = $activeProcedure->getUseHiddenReference() ;
	    	
			$stimuliInExperiment = $this->getStimuliInExperiment($activeExperimentId);
						
			$trainingStimuliInExperiment = $this->getTrainingStimuliInExperiment($activeExperimentId) ;
				
			$thisExperimentsStimuli = array() ;
			$thisExperimentsTrainingStimuli = array();
			$origIds                = array();
			$oridIdsSamviq			= array();
			
			$conRepository = $this->getDoctrine()->getRepository('IqaCrowdSourcingBundle:conditions');
			
			$origRepository = $this->getDoctrine()->getRepository('IqaCrowdSourcingBundle:Original');
			
   			foreach ($stimuliInExperiment as $thisStimulusInExperiment)
			{
				$thisStimulusId              = $thisStimulusInExperiment->getStimulusId();
				$trainingMode 				 = $thisStimulusInExperiment->getTrainingMode();
				$thisStimulus 			     = $conRepository->findOneBy(array('id'=>$thisStimulusId)) ;
				
				$samviqSet             		 = $thisStimulusInExperiment->getSamviq();
				$singleRepetition 			 = $thisStimulusInExperiment->getSingleRepetition();
				
				$thisStimulusFilename         = $condDir.DIRECTORY_SEPARATOR.$thisStimulus->getFilename();
				$origIds[]                   = $thisStimulus->getOriginalId() ;
				$oridIdsSamviq[]			= $thisStimulusInExperiment->getSamviq() ;
				
				
				$thisStimOrig  = $this->getDoctrine()
				->getRepository('IqaCrowdSourcingBundle:original')->findOneById($thisStimulus->getOriginalId() );
				
				
				$thisExperimentsStimuli[]    = array(	'id'=>$thisStimulusId,
														'filename'=>$thisStimulusFilename,
														'origId'=>$thisStimulus->getOriginalId() ,
														'isOrig'=>false,
														'height'=>$thisStimOrig->getHeight(),
														'width'=>$thisStimOrig->getWidth(),
														'trainingMode'=>false,
														'hiddenRef'=>false,
														'samviqSet'=>$samviqSet,
														'singleRepetition'=>$singleRepetition,
														'origFilename'=>$origDir.DIRECTORY_SEPARATOR.$thisStimOrig->getFilename()) ;
			}
		
			// add originals if neccesary
			if ($useHiddenReference){
				$origIds = array_unique($origIds);
				$oridIdsSamviq = array_unique($oridIdsSamviq);
					
				foreach ($origIds as $key=>$value){
					$thisStimulus 			     = $origRepository->findOneBy(array('id'=>$value)) ;
					$thisStimulusFilename         = $origDir.DIRECTORY_SEPARATOR.$thisStimulus->getFilename();
					if (strpos($procedureName,"samviq")!==false){
						$thisExperimentsStimuli[] = array(	'id'=>$value,
								'filename'=>$origDir.DIRECTORY_SEPARATOR.$thisStimulus->getFilename(),
								'origId'=>$value,
								'isOrig'=>true,
								'height'=>$thisStimulus->getHeight(),
								'width'=>$thisStimulus->getWidth(),
								'trainingMode'=>false,
								'samviqSet'=>$oridIdsSamviq[$key],
								'hiddenRef'=>true,
								'origFilename'=>$origDir.DIRECTORY_SEPARATOR.$thisStimulus->getFilename());
						
					}
					else{
						$thisExperimentsStimuli[] = array(	'id'=>$value,
								'filename'=>$origDir.DIRECTORY_SEPARATOR.$thisStimulus->getFilename(),
								'origId'=>$value,
								'isOrig'=>true,
								'height'=>$thisStimulus->getHeight(),
								'width'=>$thisStimulus->getWidth(),
								'trainingMode'=>false,
								'samviqSet'=>0,
								'hiddenRef'=>true,
								'origFilename'=>$origDir.DIRECTORY_SEPARATOR.$thisStimulus->getFilename());
					}
							
				}
			}
			$allStimuli = $thisExperimentsStimuli;
				
    for ($i = 1; $i < $numberOfReplications ;$i++){   	   	 
		// samviq special
		if (strpos($procedureName,"samviq")!==false){
    		// search highest samviq set id
    		$highest_samviq_id = 0;
			foreach ($allStimuli as $key => $value){
				if($value['samviqSet'] > $highest_samviq_id){
					$highest_samviq_id = $value['samviqSet'];					
				}
			}
			
			// generate new samviq sets by adding highest set id to default set id
			$additionalSamviqSet = $thisExperimentsStimuli;
			foreach ($additionalSamviqSet as $key => $value){
				$additionalSamviqSet[$key]['samviqSet'] = intval($value['samviqSet']) + intval($highest_samviq_id) + 1;
			}			
			    		
			$allStimuli =  array_merge($allStimuli, $additionalSamviqSet);
    	}
   		// default
    	else{ 		
       		$allStimuli =  array_merge($allStimuli,$thisExperimentsStimuli);
    	}		
	}
	
	// *** add individual repitions ***
	$singleRepetitionArray = array();
	$originTestSize = count($thisExperimentsStimuli);
	for ($i = 0; $i < $originTestSize; $i++) {		
		if($thisExperimentsStimuli[$i]['singleRepetition'] != 0){
			for ($reps = 1; $reps < $thisExperimentsStimuli[$i]['singleRepetition']; $reps++) {
				array_push($allStimuli, $thisExperimentsStimuli[$i]);
			}
		}
	}

	$samviqOrder = array();

	if (strpos($procedureName,"samviq")!==false){
		foreach ($allStimuli as $key => $value){
			//     		print_r($value['samviqSet']);
			array_push($samviqOrder, $value['samviqSet']);
		}
			
		for ($i = 1; $i < $numberOfReplications ;$i++){
			foreach ($samviqOrder as $key => $value){
				array_push($samviqOrder,$value);
			}
		}
		
		$samviqOrder = array_unique($samviqOrder);	
	
		shuffle($samviqOrder);
	}
			
	$thisExperimentsRandomStimuli = $allStimuli ;
	shuffle($thisExperimentsRandomStimuli);
	
	$origIds = array();
	$oridIdsSamviq = array();
	
	
	// put training part in front
	foreach ($trainingStimuliInExperiment as $thisStimulusInExperiment)
	{
				$thisStimulusId              = $thisStimulusInExperiment->getStimulusId();
				$trainingMode 				 = $thisStimulusInExperiment->getTrainingMode();
				$singleRepetition			 = $thisStimulusInExperiment->getSingleRepetition();
				$thisStimulus 			     = $conRepository->findOneBy(array('id'=>$thisStimulusId)) ;
				$samviqID					 = $thisStimulusInExperiment->getSamviq();
// 				$hiddenRef					 = $thisStimulusInExperiment->getHiddenRef();
				
			
				$thisStimulusFilename        = $condDir.DIRECTORY_SEPARATOR.$thisStimulus->getFilename();
				$origIds[]                   = $thisStimulus->getOriginalId() ;
				
				// by problems with samviq and hidden ref, check here!
				if (strpos($procedureName,"samviq")!==false){
					$oridIdsSamviq[]			= $thisStimulusInExperiment->getSamviq();
				}
			
				$thisStimOrig  = $this->getDoctrine()
				->getRepository('IqaCrowdSourcingBundle:original')->findOneById($thisStimulus->getOriginalId() );
			
				
				$thisExperimentsTrainingStimuli[]    = array(	
						'id'=>$thisStimulusId,
						'filename'=>$thisStimulusFilename,
						'origId'=>$thisStimulus->getOriginalId() ,
						'isOrig'=>false,
						'height'=>$thisStimOrig->getHeight(),
						'width'=>$thisStimOrig->getWidth(),
						'trainingMode'=>$trainingMode,
						'samviqSet' =>$samviqID,
						'singleRepetition'=>$singleRepetition,
						'hiddenRef'=>false, // training and hiddenRef ?
						'origFilename'=>$origDir.DIRECTORY_SEPARATOR.$thisStimOrig->getFilename()) ;	
				
	}
	
	// add originals if neccesary to training
	if ($useHiddenReference){
		// list alle samviq training sets
		$oridIdsSamviq = array_unique($oridIdsSamviq);
		
		foreach ($oridIdsSamviq as $key=>$value){
			$thisStimulus 			     = $origRepository->findOneBy(array('id'=>$value)) ;
			$thisStimulusFilename         = $origDir.DIRECTORY_SEPARATOR.$thisStimulus->getFilename();
				
			$thisExperimentsTrainingStimuli[] = array(	'id'=>$value,
					'filename'=>$origDir.DIRECTORY_SEPARATOR.$thisStimulus->getFilename(),
					'origId'=>$value,
					'isOrig'=>true,
					'height'=>$thisStimulus->getHeight(),
					'width'=>$thisStimulus->getWidth(),
					'trainingMode'=>true,
					'samviqSet'=>$oridIdsSamviq[$key],
					'hiddenRef'=>true,
					'origFilename'=>$origDir.DIRECTORY_SEPARATOR.$thisStimulus->getFilename()) ;
		}
	}
	
// 	print "<pre>";
// 	print_r($thisExperimentsRandomStimuli);
// 	print "</pre>";
	
	shuffle($thisExperimentsTrainingStimuli);
	$thisExperimentsRandomStimuli = array_merge($thisExperimentsTrainingStimuli, $thisExperimentsRandomStimuli);
	
	if (strpos($procedureName,"samviq")!==false){
		$samviqTrain = array();
		foreach ($thisExperimentsTrainingStimuli as $key => $value){
			array_push($samviqTrain, $value['samviqSet']);
		}
		$samviqTrain = array_unique($samviqTrain);
		
		$samviqOrder = array_merge($samviqTrain, $samviqOrder);
		
	}
	
	$session->set('samviqOrder', $samviqOrder);

// 	print "<pre>";
// 	print_r($thisExperimentsRandomStimuli);
// 	print "</pre>";
				
	$session->set('thisExperimentsRandomStimuli', $thisExperimentsRandomStimuli);
	$session->set('nextIdsIdx', 0) ;
	$session->set('procedureName', $procedureName) ;
	$session->set('imageRoot', $this->getImageRoot()) ;
	$session->set('ratingLabelNames', $ratingLabelNames) ;
	$session->set('numConcurrentPresentions',$numConcurrentPresentations);
	$session->set('stimPresentationDuration',$stimPresentationDuration);
	$session->set('doRating',false);
	$session->set('concurrentRating', $activeProcedure->getConcurrentRating());
	$session->set('progressBar', $activeProcedure->getShowProgressbar());
	$session->set('totalNumberOfImages', count($thisExperimentsRandomStimuli));
	//return new Response($activeProcedure->getInstructionText());
	    	
	$session->set('instructionText', $activeProcedure->getInstructionText()) ;
	$session->set('welcomeMessage', $activeExperiment->getWelcomeMessage());
  	$session->set('surveyTitle', $activeExperiment->getSurveyTitle());
	$session->set('preSurveyText', $activeExperiment->getPreSurveyText());  	
	$session->set('presentationDuration', $activeProcedure->getPresentationDuration());
	$session->set('labCondition', $activeExperiment->getLabCondition());
	$session->set('experimentId', $experimentId);
	
	    	
   	// generate button for index page
   	$form = $this->createFormBuilder()
    ->add('save', 'submit', array(	'label' => 'Start!','attr'=> array('class' => 'button')))->getForm();
    	
    	
    $request = $this->get('request');
    $form->handleRequest($request);
    if ($form->isValid())
    { //session starts
    		{ // write presentation session to database
    		$presentationSession = new presentationSession();
    		$presentationSession->setFinished(false);
    		$presentationSession->setExperimentId($activeExperimentId);
    		$presentationSession->setStartTime(new \DateTime('now'));
    		
    		// do after survey
    		//     		$presentationSession->setSubjectId(...) ;
    		//     		$presentationSession->setViewingDistance(...);
    		//     		$presentationSession->setLightningCondition(...);
    		
    		$em = $this->getDoctrine()->getManager();
    		$em->persist($presentationSession);
    		$em->flush();
    		}
    		
    		$session->set('presentationSessionId',$presentationSession->getId() );
    		
//     		return $this->redirect('present');
    		return $this->redirect('survey');
    		
    }
    else{
    	$welcomeMessage = $session->get('welcomeMessage') ;
     		
    	return $this->render('IqaCrowdSourcingBundle:Iqa:startPage.html.twig',
    			array('form' => $form->createView(), 'welcomeMessage'=>$welcomeMessage, 'surveyTitle'=>$session->get('surveyTitle') ));
    	}
    }
    
    public function instructionAction()
    {    	 
    	$session = $this->getRequest()->getSession();
    			
    	// generate button for index page
    	$form = $this->createFormBuilder()
    	->add('save', 'submit', array(	'label' => 'Start!',
    			'attr'=> array('class' => 'button')))->getForm();
    		 
    	$instructionText = "hi, put some instructions here!" ;
    	$instructionText = $session->get('instructionText') ;
    	$request = $this->get('request');
    	$form->handleRequest($request);
    	if ($form->isValid()	)
    	{ //session starts
    		//     		return $this->redirect('survey');
    		return $this->redirect('present');
    
    	}    	
    	else{
    		$procedureName 	= $session->get('procedureName');
    		# no preload for video    		
    		if(strpos($procedureName,'video')){
    			return $this->render('IqaCrowdSourcingBundle:Iqa:instructionPage.html.twig',
    					array(	'form' => $form->createView(),
    							'instructionText'=>$instructionText,
    							'surveyTitle'=>$session->get('surveyTitle'),
    							'imgPreload'=>''
    					));
    		}
    		else{
    			# IMAGE PRELOAD
    			return $this->render('IqaCrowdSourcingBundle:Iqa:instructionPage.html.twig',
    					array(	'form' => $form->createView(),
    							'instructionText'=>$instructionText,
    							'surveyTitle'=>$session->get('surveyTitle'),
    							'imgPreload'=>$session->get('thisExperimentsRandomStimuli')
    					));
    			
    		}
    		
    		
    		
    	}
    }
      
    
    public function surveyAction()
    {
		$session = new Session();
    	$survey = new Survey();

    	$request = $this->get('request');
    	   			
		$gender = htmlspecialchars($request->get('gender'));
		$age = intval(htmlspecialchars($request->get('age')));		
		$lightningCondition = htmlspecialchars($request->get('lightningCondition'));
		
		$displayHeight = intval(htmlspecialchars($request->get('displayHeight')));
		
		$viewingDistance = floatval(htmlspecialchars($request->get('viewingDistance')));
		
		$expert = htmlspecialchars($request->get('expert'));
		
		$personalID = htmlspecialchars($request->get('personalID'));
		
		
		$colortest = htmlspecialchars($request->get('colortest'));		
		$vision = htmlspecialchars($request->get('vision'));
		
		// TODO set to false for survey check
		$writeback = false;
		
// 		echo $request;
		
		if($age != null){
			$writeback = true;	
		}
		
		
    	if($writeback){
    		// save data into db
    		$user = new user();
    		$user->setGenderId($gender);
    		$user->setAge($age);
    		$user->setColortest($colortest);
    		$user->setVision($vision);
    		$user->setDisplayHeight($displayHeight);
    		$user->setViewingDistance($viewingDistance);
    		$user->setExpert($expert);
    		$user->setPersonalID($personalID);
    		
    		$em = $this->getDoctrine()->getManager();
    		$em->persist($user);
    		$em->flush();
    		 
    		 
    		// update presentationSession
    		$presentationSessionId = $session->get('presentationSessionId');
    		$presentationSession = $em->getRepository('IqaCrowdSourcingBundle:presentationSession')->findOneById($presentationSessionId);
    		 
    		$presentationSession->setSubjectId($user->getId());
    		$presentationSession->setLightningCondition($lightningCondition);
    		$presentationSession->setDisplayHeight($displayHeight);
    		$presentationSession->setViewingDistance($viewingDistance);   		
    		
    		$em->persist($presentationSession);
    		$em->flush();
    		 
    		// start iqa
    		return $this->redirect('instruction');
    	}
    	
    	$procedureName 	= $session->get('procedureName');
    	
    	if($session->get('labCondition')){
    		return $this->render('IqaCrowdSourcingBundle:Iqa:surveyPageLab.html.twig', array(
    				'preSurveyText'=>$session->get('preSurveyText'),
    				'surveyTitle'=>$session->get('surveyTitle')));
    	}
    	elseif (strpos($procedureName,"acr")!==false){
    		return $this->render('IqaCrowdSourcingBundle:Iqa:surveyPageFull.html.twig', array(
    				'preSurveyText'=>$session->get('preSurveyText'),
    				'surveyTitle'=>$session->get('surveyTitle')));    		
    	}   	
    	else{
    		return $this->render('IqaCrowdSourcingBundle:Iqa:surveyPage.html.twig', array(
    				'preSurveyText'=>$session->get('preSurveyText'),
    				'surveyTitle'=>$session->get('surveyTitle')));
    	}    	 
    }    
        
    public function finishAction()
    {
    	$session = new Session();
    	
    	$em = $this->getDoctrine()->getManager();
    	$presentationSessionId = $session->get('presentationSessionId');
    	$presentationSession = $em->getRepository('IqaCrowdSourcingBundle:presentationSession')->findOneById($presentationSessionId);
    	$presentationSession->setFinished(true);

    	$request = $this->get('request');

    	// set endTime only once
    	$endtime = $presentationSession->getEndTime();
     	if(is_null($endtime)){
	   		$presentationSession->setEndTime( new \Datetime('now'));
    	}
    	else{
    		$presentationSession->setEndTime( $endtime );
    	}
    	
    	 
    	
    	$currentExp = $session->get('experimentId');
    	$nextTestUrl = "app.php/2";
    	
    	// update feedback if given    	
    	$feedback_text = $request->get('feedback');
    	if($feedback_text != null){    		
   			$feedback_text = $request->get('feedback');
    		$feedback_text = str_replace(array("\r", "\n"), "", $feedback_text);
	    	$presentationSession->setFeedback($feedback_text); 

	    	$em->persist($presentationSession);
	    	$em->flush();
	    	
	    	if($currentExp == 1){
	    		return $this->render('IqaCrowdSourcingBundle:Iqa:finishPage2Lab.html.twig',
	    				array( 	'surveyTitle'=>$session->get('surveyTitle'),
	    						'nextTestID'=>$nextTestUrl
	    				));
	    	}
	    	else{
	    		return $this->render('IqaCrowdSourcingBundle:Iqa:finishPage2.html.twig',
	    				array( 'surveyTitle'=>$session->get('surveyTitle'),
	    				) );
	    		
	    	}
	    	 
    	}
    	
    	$em->persist($presentationSession);
    	$em->flush();
    	 
   		if($session->get('labCondition') == true){
   			if($currentExp == 1){
   				return $this->render('IqaCrowdSourcingBundle:Iqa:finishPageLab.html.twig',
   						array( 'surveyTitle'=>$session->get('surveyTitle'),
   								'nextTestID'=>$nextTestUrl
   						) );
   			}
   			else{
   				return $this->render('IqaCrowdSourcingBundle:Iqa:finishPage.html.twig',
   						array( 'surveyTitle'=>$session->get('surveyTitle'),
   						) );
   			}
   			
	    	
	    }
	    else{
	    	return $this->render('IqaCrowdSourcingBundle:Iqa:finishPage.html.twig',
	    			array( 'surveyTitle'=>$session->get('surveyTitle'),
	    			) );
	    }   	
    	
    }
    
}


