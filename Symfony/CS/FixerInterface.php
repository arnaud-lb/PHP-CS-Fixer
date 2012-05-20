<?php

/*
 * This file is part of the PHP CS utility.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Symfony\CS;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface FixerInterface
{
    const PSR1_LEVEL = 1;
    const PSR2_LEVEL = 3;
    const ALL_LEVEL  = 7;

    /**
     * Fixes a file.
     *
     * @param \SplFileInfo $file    A \SplFileInfo instance
     * @param string       $content The file content
     *
     * @return string The fixed file content
     */
    public function fix(\SplFileInfo $file, $content);

    /**
     * Returns the level of CS standard.
     *
     * Can be one of self::PSR1_LEVEL, self::PSR2_LEVEL, or self::ALL_LEVEL
     */
    public function getLevel();

    /**
     * Returns the priority of the fixer.
     *
     * The default priority is 0 and higher priorities are executed first.
     */
    public function getPriority();

    /**
     * Returns true if the file is supported by this fixer.
     *
     * @return Boolean true if the file is supported by this fixer, false otherwise
     */
    public function supports(\SplFileInfo $file);
}
