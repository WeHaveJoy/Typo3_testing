<?php
return unserialize('a:7:{s:26:"pagesTsConfig-package-core";a:2:{s:8:"filename";s:63:"/var/www/html/vendor/typo3/cms-core/Configuration/page.tsconfig";s:7:"content";s:46:"TCEMAIN.translateToMessage = Translate to %s:
";}s:29:"pagesTsConfig-package-backend";a:2:{s:8:"filename";s:66:"/var/www/html/vendor/typo3/cms-backend/Configuration/page.tsconfig";s:7:"content";s:1990:"# Register default link handlers
TCEMAIN.linkHandler {
  page {
    handler = TYPO3\\CMS\\Backend\\LinkHandler\\PageLinkHandler
    label = LLL:EXT:backend/Resources/Private/Language/locallang_browse_links.xlf:page
  }
  url {
    handler = TYPO3\\CMS\\Backend\\LinkHandler\\UrlLinkHandler
    label = LLL:EXT:backend/Resources/Private/Language/locallang_browse_links.xlf:extUrl
    displayAfter = page,file,folder
    scanAfter = telephone
  }
  email {
    handler = TYPO3\\CMS\\Backend\\LinkHandler\\MailLinkHandler
    label = LLL:EXT:backend/Resources/Private/Language/locallang_browse_links.xlf:email
    displayAfter = page,file,folder,url
    scanBefore = url
  }
  telephone {
    handler = TYPO3\\CMS\\Backend\\LinkHandler\\TelephoneLinkHandler
    label = LLL:EXT:backend/Resources/Private/Language/locallang_browse_links.xlf:telephone
    displayAfter = page,file,folder,url,mail
    scanBefore = url
  }
}

mod.web_list {
  enableClipBoard = selectable
  tableDisplayOrder {
    be_users.after = be_groups
    sys_filemounts.after = be_users
    sys_file_storage.after = sys_filemounts
    fe_users.after = fe_groups
    fe_users.before = pages
    sys_template.after = pages
    backend_layout.after = pages
    tt_content.after = pages,backend_layout,sys_template
    sys_category.after = tt_content
  }
  searchLevel.items {
    -1 = EXT:core/Resources/Private/Language/locallang_core.xlf:labels.searchLevel.infinite
    0 = EXT:core/Resources/Private/Language/locallang_core.xlf:labels.searchLevel.0
    1 = EXT:core/Resources/Private/Language/locallang_core.xlf:labels.searchLevel.1
    2 = EXT:core/Resources/Private/Language/locallang_core.xlf:labels.searchLevel.2
    3 = EXT:core/Resources/Private/Language/locallang_core.xlf:labels.searchLevel.3
    4 = EXT:core/Resources/Private/Language/locallang_core.xlf:labels.searchLevel.4
  }
}

# dummy placeholders for item groups
mod.wizards {
  newRecord.pages.show {
    pageInside = 1
    pageAfter = 1
    pageSelectPosition = 1
  }
}
";}s:30:"pagesTsConfig-package-frontend";a:2:{s:8:"filename";s:67:"/var/www/html/vendor/typo3/cms-frontend/Configuration/page.tsconfig";s:7:"content";s:124:"TCEFORM.tt_content {
  imageorient {
    types {
      image {
        removeItems = 8,9,10,17,18,25,26
      }
    }
  }
}
";}s:30:"pagesTsConfig-package-filelist";a:2:{s:8:"filename";s:67:"/var/www/html/vendor/typo3/cms-filelist/Configuration/page.tsconfig";s:7:"content";s:477:"# Register link handlers
TCEMAIN.linkHandler {
  file {
    handler = TYPO3\\CMS\\Filelist\\LinkHandler\\FileLinkHandler
    label = LLL:EXT:backend/Resources/Private/Language/locallang_browse_links.xlf:file
    displayAfter = page
    scanAfter = page
  }
  folder {
    handler = TYPO3\\CMS\\Filelist\\LinkHandler\\FolderLinkHandler
    label = LLL:EXT:backend/Resources/Private/Language/locallang_browse_links.xlf:folder
    displayAfter = page,file
    scanAfter = page,file
  }
}
";}s:25:"pagesTsConfig-package-seo";a:2:{s:8:"filename";s:62:"/var/www/html/vendor/typo3/cms-seo/Configuration/page.tsconfig";s:7:"content";s:431:"mod.web_info.fieldDefinitions {
  seo {
    label = LLL:EXT:seo/Resources/Private/Language/locallang_webinfo.xlf:seo
    fields = title,uid,slug,seo_title,description,no_index,no_follow,canonical_link,sitemap_changefreq,sitemap_priority
  }
  social_media {
    label = LLL:EXT:seo/Resources/Private/Language/locallang_webinfo.xlf:social_media
    fields = title,uid,og_title,og_description,twitter_title,twitter_description
  }
}
";}s:26:"pagesTsConfig-package-info";a:2:{s:8:"filename";s:63:"/var/www/html/vendor/typo3/cms-info/Configuration/page.tsconfig";s:7:"content";s:771:"mod.web_info.fieldDefinitions {
    0 {
        label = LLL:EXT:info/Resources/Private/Language/locallang_webinfo.xlf:pages_0
        fields = title,uid,slug,starttime,endtime,fe_group,target,url,shortcut,shortcut_mode
    }
    1 {
        label = LLL:EXT:info/Resources/Private/Language/locallang_webinfo.xlf:pages_1
        fields = title,uid,###ALL_TABLES###
    }
    2 {
        label = LLL:EXT:info/Resources/Private/Language/locallang_webinfo.xlf:pages_2
        fields = title,uid,lastUpdated,newUntil,cache_timeout,php_tree_stop,TSconfig,is_siteroot
    }
    3 {
        label = LLL:EXT:info/Resources/Private/Language/locallang_webinfo.xlf:pages_layouts
        fields = title,uid,actual_backend_layout,backend_layout,backend_layout_next_level,layout
    }
}
";}s:30:"pagesTsConfig-package-viewpage";a:2:{s:8:"filename";s:67:"/var/www/html/vendor/typo3/cms-viewpage/Configuration/page.tsconfig";s:7:"content";s:1508:"mod.web_view.previewFrameWidths {
    1920.label = LLL:EXT:viewpage/Resources/Private/Language/locallang.xlf:computer
    1920.type = desktop
    1920.width = 1920
    1920.height = 1080

    1366.label = LLL:EXT:viewpage/Resources/Private/Language/locallang.xlf:computer
    1366.type = desktop
    1366.width = 1366
    1366.height = 768

    1280.label = LLL:EXT:viewpage/Resources/Private/Language/locallang.xlf:computer
    1280.type = desktop
    1280.width = 1280
    1280.height = 1024

    1024.label = LLL:EXT:viewpage/Resources/Private/Language/locallang.xlf:computer
    1024.type = desktop
    1024.width = 1024
    1024.height = 768

    nexus7.label = Nexus 7
    nexus7.type = tablet
    nexus7.width = 600
    nexus7.height = 960

    nexus6p.label = Nexus 6P
    nexus6p.type = mobile
    nexus6p.width = 411
    nexus6p.height = 731

    ipadpro.label = iPad Pro
    ipadpro.type = tablet
    ipadpro.width = 1024
    ipadpro.height = 1366

    ipadair.label = iPad Air
    ipadair.type = tablet
    ipadair.width = 768
    ipadair.height = 1024

    iphone7plus.label = iPhone 7 Plus
    iphone7plus.type = mobile
    iphone7plus.width = 414
    iphone7plus.height = 736

    iphone6.label = iPhone 6
    iphone6.type = mobile
    iphone6.width = 375
    iphone6.height = 667

    iphone5.label = iPhone 5
    iphone5.type = mobile
    iphone5.width = 320
    iphone5.height = 568

    iphone4.label = iPhone 4
    iphone4.type = mobile
    iphone4.width = 320
    iphone4.height = 480
}
";}}');
#