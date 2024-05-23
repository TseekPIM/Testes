<?php

use PHPUnit\Framework\TestCase;

class TeamProfileManagementTest extends TestCase
{
    public function testSuccessfulProfileUpdate()
    {
        $admin = new TeamAdmin("Equipe Alpha");
        $newDescription = "Equipe focada em estratégia e inovação";

        $profileManager = new ProfileManager();
        $result = $profileManager->updateProfile($admin, $newDescription);
        $this->assertTrue($result);
    }

    public function testNonAdminAttemptToUpdateProfile()
    {

        $member = new TeamMember("Equipe Alpha");
        $newDescription = "Nova descrição";
        $profileManager = new ProfileManager();
        $result = $profileManager->updateProfile($member, $newDescription);

        $this->assertFalse($result);
    }
}
