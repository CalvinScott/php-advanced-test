<?php
  use PHPUnit\Framework\TestCase;
  include 'CountChange.php';

  class CountChangeSolution extends TestCase {
    public function testShouldHandleTheExampleCase() {
      $this->assertSame(3, count_change(4,array(1,2)));
    }
    public function testShouldHandleAnotherSimpleCase() {
      $this->assertSame(4, count_change(10,array(5,2,3)));
    }
    public function testShouldHandleZeroCase() {
      $this->assertSame(0, count_change(11, array(5,7)));
    }
    public function testShouldHandleNegativeCase() {
      $this->assertSame(0, count_change(-1, array(3,4)));
    }
    public function testShouldHandleNullCase() {
      $this->assertSame(0, count_change(50, null));
    }
  }
?>