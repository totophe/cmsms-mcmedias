<?php
  if (!cmsms()) exit;
  
  // var_dump($params);
  
  $url = $this->getThumbnail($params);
  
  if(isset($params['redirect']))
  {
		// TODO: No redirect, too consuming.
    header('Location: ' . $url); // DIRECTLY OUTPUT THE IMAGE TO THE BROWSER WITH REDIRECT
  }
  else
  {
    echo $url;
  }
