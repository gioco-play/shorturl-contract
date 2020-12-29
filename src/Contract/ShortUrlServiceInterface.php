<?php
declare(strict_types=1);
namespace GiocoPlus\ShortUrl\Contract;
/**
 * 交易
 */
interface ShortUrlServiceInterface {

    /**
     * 短網址產生
     *
     * @param string $gameUrl
     * @param string $operatorCode
     * @param string $playerName
     * @param string $gameCode
     * @param boolean $ssl
     * @return array
     */
    function gen(string $gameUrl, string $operatorCode, string $playerName, string $gameCode, bool $ssl): array;
}

