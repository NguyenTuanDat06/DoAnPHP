
<?php
// LOGIN TEST CREATE BY HAI DANG 
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    public function testLoginSuccess()
    {
        // Create an instance of your login controller
        $loginController = new LoginController();
    
        // Call the login function with valid credentials
        $result = $loginController->login('dn56770@gmail.com', '123');
    
        // Assert that the login was successful
        $this->assertTrue($result['success']);
    }
    public function testLoginFailure()
    {
        // Create an instance of your login controller
        $loginController = new LoginController();
    
        // Call the login function with invalid credentials
        $result = $loginController->login('dat@gmail.com', 'null');
    
        // Assert that the login failed
        $this->assertFalse($result['success']);
    }
    
}
