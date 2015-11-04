<?php

namespace STUBR\Customvhs\ViewHelpers;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

class SwitchLocaleViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

  /**
  * What it does
  *
  * @param string $new New Locale to switch to
  * @return void
  * @author Urs Bräm <ub@sturmundbraem.ch>
  */
  public function render( $new) {
    setlocale(LC_ALL, $new);
  }
}

?>
