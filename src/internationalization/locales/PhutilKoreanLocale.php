<?php
/**
 * Created by PhpStorm.
 * User: seyriz
 * Date: 15. 8. 3.
 * Time: 오전 12:42
 */

/**
 * Locale for "Korean (Republic of Korea)".
 */
final class PhutilKoreanLocale extends PhutilLocale {

    public function getLocaleCode() {
        return 'ko_KR';
    }

    public function getLocaleName() {
        return pht('Korean (Republic of Korea)');
    }

}