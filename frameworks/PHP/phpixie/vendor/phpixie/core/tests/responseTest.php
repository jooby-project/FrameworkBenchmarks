<?php

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013 - 02 - 05 at 23:08:34.
 */
class ResponseTest extends PHPUnit_Framework_TestCase
{

	/**
	 * @var Response
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = new \PHPixie\Response;
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{

	}

	/**
	 * @covers Response::add_header
	 * @todo   Implement testAdd_header().
	 */
	public function testAdd_header()
	{
		$this->object->add_header('test');
		$this->assertEquals(end($this->object->headers), 'test');
	}

	/**
	 * @covers Response::redirect
	 * @todo   Implement testRedirect().
	 */
	public function testRedirect()
	{
		$this->object->redirect('http://google.com');
		$this->assertContains('Location: http://google.com', $this->object->headers);
	}

	/**
	 * @covers Response::send_body
	 * @todo   Implement testSend_body().
	 */
	public function testSend_body()
	{
		$this->object->body = 'test';
		ob_start();
		$this->object->send_body();
		$out = ob_get_contents();
		ob_end_clean();
		$this->assertEquals($out, 'test');
	}

}
