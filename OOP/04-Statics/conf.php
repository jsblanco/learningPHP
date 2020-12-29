<?php

class StaticConf {

    public static $color;
    public static $environment;
    public static $newsletter;

    /**
     * @return mixed
     */
    public static function getColor()
    {
        return self::$color;
    }

    /**
     * @param mixed $color
     */
    public static function setColor($color): void
    {
        self::$color = $color;
    }

    /**
     * @return mixed
     */
    public static function getEnvironment()
    {
        return self::$environment;
    }

    /**
     * @param mixed $environment
     */
    public static function setEnvironment($environment): void
    {
        self::$environment = $environment;
    }

    /**
     * @return mixed
     */
    public static function getNewsletter()
    {
        return self::$newsletter;
    }

    /**
     * @param mixed $newsletter
     */
    public static function setNewsletter($newsletter): void
    {
        self::$newsletter = $newsletter;
    }



}