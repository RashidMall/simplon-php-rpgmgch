<?php require './app/User.php'; ?>

<?php 
class UserTest extends \PHPUnit\Framework\TestCase{

    // setId()
    public function testThatMethodCanSetId(){
        $user = new User('user@mail.com');
        $user->setId(5);

        $this->assertEquals(5, $user->getId());
        $this->assertNotEquals(1, $user->getId());
    }

    public function testThatTypeOfIdIsString(){
        $user = new User('user@mail.com');
        $user->setId(5);

        $this->assertInternalType('string', $user->getId());
    }

    // setEmail()
    public function testThatMethodCanSetEmail(){
        $user = new User('user@mail.com');
        $newEmail = 'test@test.com';
        $user->setEmail($newEmail);

        $this->assertEquals($newEmail, $user->getEmail());
        $this->assertNotEquals('user@mail.com', $user->getEmail());
    }

    public function testThatTypeOfEmailIsString(){
        $user = new User('user@mail.com');
        $newEmail = 'test@test.com';
        $user->setEmail($newEmail);

        $this->assertInternalType('string', $user->getEmail());
    }

    // setCreatedAt()
    
}
?>