<?php


use PHPUnit\Framework\TestCase;

class PrimeNumbersTest extends TestCase
{
    /**
     * @test
     *
     * @dataProvider numbers
     */
    public function it_returns_true_if_number_passed_is_prime_number($number, $expected)
    {
        $primeNumber = new App\PrimeNumbers;

        $this->assertSame($expected, $primeNumber->check($number));
    }

    public function numbers()
    {
        return [
            [0, false],
            [1, false],
            [2, true],
            [3, true],
            [4, false],
            [5, true],
            [6, false],
            [7, true],
            [8, false],
            [9, false],
            [10, false],
            [11, true],
            [12, false],
            [13, true],
            [14, false],
            [15, false],
            [16, false],
            [17, true],
            [18, false],
            [19, true],
            [20, false],
            [21, false],
            [23, true],
            [161177785, false]
        ];
    }
}
