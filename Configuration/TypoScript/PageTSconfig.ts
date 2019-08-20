mod.wizards.newContentElement.wizardItems.common {
   elements {
      my_slider {
         iconIdentifier = default-icon
         title = LLL:EXT:ny_slider/Resources/Private/Language/Tca.xlf:my_slider.wizard.title
         description = LLL:EXT:ny_slider/Resources/Private/Language/Tca.xlf:my_slider.wizard.description
         tt_content_defValues {
            CType = my_slider
         }
      }
   }
   show := addToList(my_slider)
}
