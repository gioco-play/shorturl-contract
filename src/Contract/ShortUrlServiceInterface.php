<?php
declare(strict_types=1);
namespace GiocoPlus\ShortUrl\Contract;
/**
 * 交易
 */
interface ShortUrlServiceInterface {

    /**
     * 遊戲短網址產生
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
    function genGameUrl(string $rawUrl, string $operatorCode, string $playerName, string $vendor, string $gameCode, bool $ssl): array;


    /**
     * 短網址產生
     *
     * @param string $rawUrl
     * @param boolean $ssl
     * @return array
     */
    function gen(string $rawUrl, bool $ssl): array;

    /**
     * 短網址轉回原始網址
     * @param string $gameUrl
     * @return array
     */
    function transferToRawUrl(string $gameUrl): array;
}

