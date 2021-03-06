<!DOCTYPE html>
<!---
Copyright 2017 The AMP Start Authors. All Rights Reserved.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

      http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS-IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
-->

<html ⚡="" lang="en">
  <head>
    <meta charset="utf-8" />
    <title><?=$_PAGE_TITLE?></title>
    <?php  
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
             $url = "https://";   
        else  
             $url = "http://";   
        // Append the host(domain name, ip) to the URL.   
        $url.= $_SERVER['HTTP_HOST'];   
        
        // Append the requested resource location to the URL   
        $url.= $_SERVER['REQUEST_URI'];   
        
        $url = filter_var($url, FILTER_SANITIZE_URL);
    ?>   
    <link
      rel="canonical"
      href="<?php echo $url ?>"
    />
    <meta name="viewport" content="width=device-width" />
    <meta name="amp-google-client-id-api" content="googleanalytics" />
    <meta name="google-site-verification" content="nvPIY2IcYMgQYXJCOuCCsQDGCGK87NE2hfD8AtLk0qY" />

    <meta name="author" content="<?=$_CONFIG_METAAUTHOR?>" />
    <meta name="description" content="<?=$_CONFIG_METADESCRIPTION?>" />
    <meta name="keyword" content="<?=$_CONFIG_METAKEYWORD?>" />

    

    <script async="" src="https://cdn.ampproject.org/v0.js"></script>

    <style amp-boilerplate="">
      body {
        -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
        -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
        -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
        animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      }
      @-webkit-keyframes -amp-start {
        from {
          visibility: hidden;
        }
        to {
          visibility: visible;
        }
      }
      @-moz-keyframes -amp-start {
        from {
          visibility: hidden;
        }
        to {
          visibility: visible;
        }
      }
      @-ms-keyframes -amp-start {
        from {
          visibility: hidden;
        }
        to {
          visibility: visible;
        }
      }
      @-o-keyframes -amp-start {
        from {
          visibility: hidden;
        }
        to {
          visibility: visible;
        }
      }
      @keyframes -amp-start {
        from {
          visibility: hidden;
        }
        to {
          visibility: visible;
        }
      }
    </style>
    <noscript> 
      <style amp-boilerplate="">
        body {
          -webkit-animation: none;
          -moz-animation: none;
          -ms-animation: none;
          animation: none;
        }
      </style>
    </noscript>

    <script
      custom-element="amp-sidebar"
      src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"
      async=""
    ></script>
<!-- 
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700"
      rel="stylesheet"
    /> -->


    <style amp-custom="">
    <?php
      include "css/page.css";
    ?>

    </style>
