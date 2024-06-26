<?php  
$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
         
        if($actual_link == 'https://Wikithinkers.com/' || $actual_link == 'https://Wikithinkers.com/index'){ ?>
            <title>Wikithinkers | Home</title>
            <meta name="description" content="Wikithinkers | Home">
            <link rel="canonical" href="https://Wikithinkers.com/" />
        <?php }

        elseif($actual_link == 'https://Wikithinkers.com/about-us'){  ?>
            <title>About Us</title>
            <meta name="description" content="About Us">            
            <link rel="canonical" href="https://Wikithinkers.com/about-us" />
        <?php }

        elseif($actual_link == 'https://Wikithinkers.com/contact-us'){  ?>
            <title>Contact Us</title>
            <meta name="description" content="Contact Us">            
            <link rel="canonical" href="https://Wikithinkers.com/contact-us" />
        <?php }

        elseif($actual_link == 'https://Wikithinkers.com/wikipedia-page-editing'){  ?>
            <title>Wikithinkers | Wikipedia Page Editing</title>
            <meta name="description" content="Wikithinkers | Wikipedia Page Editing">            
            <link rel="canonical" href="https://Wikithinkers.com/wikipedia-page-editing" />
        <?php }

        elseif($actual_link == 'https://Wikithinkers.com/wikipedia-page-translation'){  ?>
            <title>Wikithinkers | Wikipedia Page Translation</title>
            <meta name="description" content="Wikithinkers | Wikipedia Page Translation">            
            <link rel="canonical" href="https://Wikithinkers.com/wikipedia-page-translation" />
        <?php }

        elseif($actual_link == 'https://Wikithinkers.com/review-managment'){  ?>
            <title>Wikithinkers | Review Managment</title>
            <meta name="description" content="Wikithinkers | Review Managment">            
            <link rel="canonical" href="https://Wikithinkers.com/review-managment" />
        <?php }

        elseif($actual_link == 'https://Wikithinkers.com/brand-reputation-managment'){  ?>
            <title>Wikithinkers | Brand Reputation Managment</title>
            <meta name="description" content="Wikithinkers | Brand Reputation Managment">            
            <link rel="canonical" href="https://Wikithinkers.com/brand-reputation-managment" />
        <?php }

        elseif($actual_link == 'https://Wikithinkers.com/reputation-marketing'){  ?>
            <title>Wikithinkers | Reputation Marketing</title>
            <meta name="description" content="Wikithinkers | Reputation Marketing">            
            <link rel="canonical" href="https://Wikithinkers.com/reputation-marketing" />
        <?php }
        
        elseif($actual_link == 'https://Wikithinkers.com/content-removal-managment'){  ?>
            <title>Wikithinkers | Content Removal Managment</title>
            <meta name="description" content="Wikithinkers | Content Removal Managment">            
            <link rel="canonical" href="https://Wikithinkers.com/content-removal-managment" />
        <?php }

        elseif($actual_link == 'https://Wikithinkers.com/terms&conditions'){  ?>
            <title>Terms and Conditions</title>
            <meta name="description" content="Read Our Terms and Conditions before Proceeding Your Orders. We follow straight policies to Provide top-quality Content Services.">     
            <meta name="robots" content="noindex,nofollow">        
        <?php }

        elseif($actual_link == 'https://Wikithinkers.com/privacy-policy'){  ?>
            <title>Privacy Policy</title>
            <meta name="description" content="Privacy Policy is to secure Your Personal and Business Information and Data Protection. We never sell any data to third party.">
            <meta name="robots" content="noindex,nofollow">
        <?php }

?>