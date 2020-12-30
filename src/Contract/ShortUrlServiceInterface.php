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
     * @param string $rawUrl
     * @param string $operatorCode
     * @param string $playerName
     * @param string $vendor
     * @param string $gameType
     * @param string $gameCode
     * @param boolean $ssl
     * @return array
     */
    function gen(string $rawUrl, string $operatorCode, string $playerName, string $vendor, string $gameType, string $gameCode, bool $ssl): array;
}

