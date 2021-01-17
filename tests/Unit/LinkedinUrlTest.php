<?php

namespace Zhanang19\LaravelRules\Tests\Unit;

use Zhanang19\LaravelRules\Rules\LinkedinUrl;
use Zhanang19\LaravelRules\Tests\TestCase;

class LinkedinUrlTest extends TestCase
{
    protected $rule;

    public function setUp(): void
    {
        parent::setUp();
        $this->rule = new LinkedinUrl();
    }

    /**
     * @dataProvider validLinks
     */
    public function testValidUrlMustBePassed(string $value): void
    {
        $this->assertEquals(true, $this->rule->passes('test', $value));
    }

    /**
     * @dataProvider invalidLinks
     */
    public function testInvalidUrlMustNotBePassed(string $value): void
    {
        $this->assertEquals(false, $this->rule->passes('test', $value));
    }

    public function validLinks(): array
    {
        return [
            ['https://linkedin.com/in/user-name'],
            ['https://id.linkedin.com/in/user-name-1as9b087'],
            ['http://www.linkedin.com/in/some-one'],
            ['http://uk.linkedin.com/in/some-one?trk=nav_responsive_tab_profile'],
        ];
    }

    public function invalidLinks(): array
    {
        return [
            ['http://stackoverflow.com/questions/ask'],
            ['google.com'],
            ['http://dodge.linkedin.com/in/someDodgeAddress'],
            ['https://google.com/'],
        ];
    }
}
