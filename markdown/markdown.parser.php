<?php defined('COT_CODE') or die('Wrong URL');
/* ====================
[BEGIN_COT_EXT]
Hooks=parser
[END_COT_EXT]
==================== */

require_once $cfg['plugins_dir'] . '/markdown/lib/markdown-parser-extended.php';

/**
 * Markdown parsing through MarkdownExtended
 *
 * @param  string $text Page markup
 * @return string
 */
function cot_parse_markdown($text)
{
    $parsed = MarkdownExtended($text);
    return $parsed;
}