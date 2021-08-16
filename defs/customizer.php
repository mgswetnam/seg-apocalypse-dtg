<?php
$customizer = array( // Panels
  "seg-customizer-options" => array(
    "ptitle" => "SEG Options",
    "pdomain" => "seg-theme",
    "pcapability" => "edit_theme_options",
    "psections" => array( // Sections
      "seg-theme-header" => array(
        "stitle" => "Header Elements",
        "sdomain" => "seg-theme",
        "spriority" => 115,
        "scapability" => "edit_theme_options",
        "sdescription" => "Additional elements to add to the header for clients",
        "sfields" => array( // Fields
          "seg_textarea_highest" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Highest Code",
            "fdomain" => "seg-theme",
            "fstype" => "option",
            "ftype" => "textarea",
            "fsettings" => "seg_highest_code",
            "fattributes" => array(
              "placeholder" => "As close as you can get to the top.",
              "rows" => "10",
              "wrap" => "off"
            )
          ),
          "seg_textarea_prefetch" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Prefetch URLs",
            "fdomain" => "seg-theme",
            "fstype" => "option",
            "ftype" => "textarea",
            "fsettings" => "seg_prefetch_urls",
            "fattributes" => array(
              "placeholder" => "Adds DNS Prefetch tags (DNS). One per line.",
              "rows" => "10",
              "wrap" => "off"
            )
          ),
          "seg_textarea_preconnect" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Preconnect URLs",
            "fdomain" => "seg-theme",
            "fstype" => "option",
            "ftype" => "textarea",
            "fsettings" => "seg_preconnect_urls",
            "fattributes" => array(
              "placeholder" => "Adds preconnect tags (DNS + TCP + TLS). One per line.",
              "rows" => "10",
              "wrap" => "off"
            )
          ),
          "seg_textarea_preload" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Preload Resources",
            "fdomain" => "seg-theme",
            "fstype" => "option",
            "ftype" => "textarea",
            "fsettings" => "seg_preload_resources",
            "fattributes" => array(
              "placeholder" => "Adds preload tags. One per line.",
              "rows" => "10",
              "wrap" => "off"
            )
          )
        ) // End Fields
      ),
      "seg-theme-tracking" => array(
        "stitle" => "Tracking Sources",
        "sdomain" => "seg-theme",
        "spriority" => 115,
        "scapability" => "edit_theme_options",
        "sdescription" => "Specific tracking resources you can choose to implement.",
        "sfields" => array( // Fields
          "seg_radio_facebook" => array(
            "fdefault" => "no",
            "fcapability" => "edit_theme_options",
            "flabel" => "Facebook Pixel",
            "fdomain" => "seg-theme",
            "fstype" => "option",
            "ftype" => "radio",
            "fsettings" => "seg_radio_facebook",
            "fchoices" => array(
              "yes" => "Yes",
              "no" => "No"
            )
          ),
          "seg_textarea_fbpixelcode" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Facebook Pixel Code",
            "fdomain" => "seg-theme",
            "fstype" => "option",
            "ftype" => "textarea",
            "fsettings" => "seg_tracking_fbpixelcode",
            "fattributes" => array(
              "placeholder" => "Use %s to mark where additional tags should go. ",
              "rows" => "10",
              "wrap" => "off"
            )
          )
        ) // End Fields
      ),
      "seg-theme-heading" => array(
        "stitle" => "Heading Settings",
        "sdomain" => "seg-theme",
        "spriority" => 115,
        "scapability" => "edit_theme_options",
        "sdescription" => "Settings for the page heading.",
        "sfields" => array( // Fields
          "seg_default_title_image" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Default Image",
            "fdomain" => "seg-theme",
            "fstype" => "option",
            "ftype" => "imagecontrol",
            "fsettings" => "seg_default_title_image",
            "fattributes" => array(
              "placeholder" => "Default image for the page title background",
              "rows" => "10",
              "wrap" => "off"
            )
          )
        ) // End Fields
      ),
      "seg-theme-resources" => array(
        "stitle" => "Additional Resources",
        "sdomain" => "seg-theme",
        "spriority" => 115,
        "scapability" => "edit_theme_options",
        "sdescription" => "Additional resources you can opt to include.",
        "sfields" => array( // Fields
          "seg_checkbox_bootstrap" => array(
            "fdefault" => "no",
            "fcapability" => "edit_theme_options",
            "flabel" => "Include Bootstrap",
            "fdomain" => "seg-theme",
            "fstype" => "option",
            "ftype" => "radio",
            "fsettings" => "seg_include_bootstrap",
            "fchoices" => array(
              "yes" => "Yes",
              "no" => "No"
            )
          ),
          "seg_checkbox_fontawesome" => array(
            "fdefault" => "no",
            "fcapability" => "edit_theme_options",
            "flabel" => "Include FontAwesome",
            "fdomain" => "seg-theme",
            "fstype" => "option",
            "ftype" => "radio",
            "fsettings" => "seg_include_fontawesome",
            "fchoices" => array(
              "yes" => "Yes",
              "no" => "No"
            )
          )
        ) // End Fields
      ),
      "seg-theme-social" => array(
        "stitle" => "Social Media",
        "sdomain" => "seg-theme",
        "spriority" => 115,
        "scapability" => "edit_theme_options",
        "sdescription" => "Social media sites that support your site.",
        "sfields" => array( // Fields
          "seg_text_social_facebook" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Facebook",
            "fdomain" => "seg-theme",
            "fstype" => "theme_mod",
            "ftype" => "text",
            "fsettings" => "seg_social_facebook",
            "fattributes" => array(
              "placeholder" => "Facebook page link"
            )
          ),
          "seg_text_social_youtube" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "YouTube",
            "fdomain" => "seg-theme",
            "fstype" => "theme_mod",
            "ftype" => "text",
            "fsettings" => "seg_social_youtube",
            "fattributes" => array(
              "placeholder" => "YouTube page link"
            )
          ),
          "seg_text_social_instagram" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Instagram",
            "fdomain" => "seg-theme",
            "fstype" => "theme_mod",
            "ftype" => "text",
            "fsettings" => "seg_social_instagram",
            "fattributes" => array(
              "placeholder" => "Instagram page link"
            )
          ),
          "seg_text_social_tiktok" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "TikTok",
            "fdomain" => "seg-theme",
            "fstype" => "theme_mod",
            "ftype" => "text",
            "fsettings" => "seg_social_tiktok",
            "fattributes" => array(
              "placeholder" => "TikTok page link"
            )
          ),
          "seg_text_social_linkedin" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "LinkedIn",
            "fdomain" => "seg-theme",
            "fstype" => "theme_mod",
            "ftype" => "text",
            "fsettings" => "seg_social_linkedin",
            "fattributes" => array(
              "placeholder" => "LinkedIn page link"
            )
          ),
          "seg_text_social_snapchat" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "SnapChat",
            "fdomain" => "seg-theme",
            "fstype" => "theme_mod",
            "ftype" => "text",
            "fsettings" => "seg_social_snapchat",
            "fattributes" => array(
              "placeholder" => "SnapChat page link"
            )
          ),
          "seg_text_social_twitter" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Twitter",
            "fdomain" => "seg-theme",
            "fstype" => "theme_mod",
            "ftype" => "text",
            "fsettings" => "seg_social_twitter",
            "fattributes" => array(
              "placeholder" => "Twitter page link"
            )
          ),
          "seg_text_social_reddit" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Reddit",
            "fdomain" => "seg-theme",
            "fstype" => "theme_mod",
            "ftype" => "text",
            "fsettings" => "seg_social_reddit",
            "fattributes" => array(
              "placeholder" => "Reddit page link"
            )
          ),
          "seg_text_social_pinterest" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Pinterest",
            "fdomain" => "seg-theme",
            "fstype" => "theme_mod",
            "ftype" => "text",
            "fsettings" => "seg_social_pinterest",
            "fattributes" => array(
              "placeholder" => "Pinterest page link"
            )
          ),
          "seg_text_social_discord" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Discord",
            "fdomain" => "seg-theme",
            "fstype" => "theme_mod",
            "ftype" => "text",
            "fsettings" => "seg_social_discord",
            "fattributes" => array(
              "placeholder" => "Discord page link"
            )
          ),
          "seg_text_social_flickr" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Flickr",
            "fdomain" => "seg-theme",
            "fstype" => "theme_mod",
            "ftype" => "text",
            "fsettings" => "seg_text_social_flickr",
            "fattributes" => array(
              "placeholder" => "Flickr page link"
            )
          ),
          "seg_text_social_tumblr" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Tumblr",
            "fdomain" => "seg-theme",
            "fstype" => "theme_mod",
            "ftype" => "text",
            "fsettings" => "seg_social_tumblr",
            "fattributes" => array(
              "placeholder" => "Tumblr page link"
            )
          ),
          "seg_text_social_twitch" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Twitch",
            "fdomain" => "seg-theme",
            "fstype" => "theme_mod",
            "ftype" => "text",
            "fsettings" => "seg_social_twitch",
            "fattributes" => array(
              "placeholder" => "Twitch page link"
            )
          ),
          "seg_text_social_yelp" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Yelp",
            "fdomain" => "seg-theme",
            "fstype" => "theme_mod",
            "ftype" => "text",
            "fsettings" => "seg_social_yelp",
            "fattributes" => array(
              "placeholder" => "Yelp page link"
            )
          ),
        ) // End Fields
      )
    )
  )
);
?>
