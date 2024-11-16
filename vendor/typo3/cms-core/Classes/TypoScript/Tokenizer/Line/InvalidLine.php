<?php

declare(strict_types=1);

/*
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

namespace TYPO3\CMS\Core\TypoScript\Tokenizer\Line;

/**
 * A line that is syntactically invalid.
 *
 * This is created by LosslessTokenizer whenever a line does not make sense.
 * Examples:
 * "foo.bar" - no operator
 * "foo.bar <" - right side empty
 * "@import ''" - no import value
 *
 * Note only LosslessTokenizer creates these lines, LossyTokenizer just skips them.
 *
 * @internal: Internal tokenizer structure.
 */
final class InvalidLine extends AbstractLine {}
