<?php

declare(strict_types=1);

namespace AliReaza\Tests\UUID\Unit;

use AliReaza\UUID\V4 as UUID_V4;
use PHPUnit\Framework\TestCase;

/**
 * Class V4Test
 *
 * @package AliReaza\Tests\UUID\Unit
 */
class V4Test extends TestCase
{
    public function test_When_create_new_V4_Expect_string_with_a_length_of_36_characters()
    {
        $uuid_v4 = (string)new UUID_V4();

        $this->assertTrue(strlen($uuid_v4) === 36);
    }

    public function test_When_create_new_V4_Expect_string_with_5_parts()
    {
        $uuid_v4 = (string)new UUID_V4();

        $uuid = explode('-', $uuid_v4);

        $this->assertTrue(count($uuid) === 5);
    }

    public function test_When_create_new_V4_Expect_part_1_has_a_text_of_8_characters()
    {
        $uuid_v4 = (string)new UUID_V4();

        $uuid = explode('-', $uuid_v4);

        $this->assertTrue(strlen($uuid[0]) === 8);
    }

    public function test_When_create_new_V4_Expect_part_2_has_a_text_of_4_characters()
    {
        $uuid_v4 = (string)new UUID_V4();

        $uuid = explode('-', $uuid_v4);

        $this->assertTrue(strlen($uuid[1]) === 4);
    }

    public function test_When_create_new_V4_Expect_part_3_has_a_text_of_4_characters()
    {
        $uuid_v4 = (string)new UUID_V4();

        $uuid = explode('-', $uuid_v4);

        $this->assertTrue(strlen($uuid[2]) === 4);
    }

    public function test_When_create_new_V4_Expect_part_4_has_a_text_of_4_characters()
    {
        $uuid_v4 = (string)new UUID_V4();

        $uuid = explode('-', $uuid_v4);

        $this->assertTrue(strlen($uuid[3]) === 4);
    }

    public function test_When_create_new_V4_Expect_part_5_has_a_text_of_12_characters()
    {
        $uuid_v4 = (string)new UUID_V4();

        $uuid = explode('-', $uuid_v4);

        $this->assertTrue(strlen($uuid[4]) === 12);
    }
}