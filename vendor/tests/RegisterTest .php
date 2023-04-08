<?php
// LOGIN TEST CREATE BY TUAN DAT
use PHPUnit\Framework\TestCase;

class RegisterTest extends TestCase
{
    public function testRegisterSuccess()
{
    // Create an instance of your register controller
    $registerController = new RegisterController();

    // Call the register function with valid user data
    $result = $registerController->register([
        'TenKH' => 'Dat',
        'Email' => 'dat@gmail.com',
        'MatKhau' => '123',
        'DiaChi' => 'nha',
        'DienThoai' => '0909090909',
        'LoaiTV' => '2'
        
    ]);

    // Assert that the registration was successful
    $this->assertTrue($result['success']);
    

    }
    public function testRegisterFailureInvalidEmail()
{
    // Create an instance of your register controller
    $registerController = new RegisterController();

    // Call the register function with an invalid email address
    $result = $registerController->register([
        'TenKH' => 'Dat',
        'Email' => 'dat@gmail.com',
        'MatKhau' => '123',
        'DiaChi' => 'nha',
        'DienThoai' => '0909090909',
        'LoaiTV' => '2'
    ]);

    // Assert that the registration failed
    $this->assertFalse($result['success']);
    $this->assertEquals('Invalid email address', $result['message']);
}

}