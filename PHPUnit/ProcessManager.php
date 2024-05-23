<?php

use PHPUnit\Framework\TestCase;
use App\testViewSelectionRequestStatus;



class Player extends TestCase
{
    public function testViewSelectionRequestStatus()
    {
        $player = new Player("Equipe Alpha");

        $processManager = new ProcessManager();
        $status = $processManager->viewStatus($player);

        $this->assertNotEmpty($status);
    }

    public function testApproveSelectionRequest()
    {

        $admin = new TeamAdmin("Equipe Alpha");
        $playerName = "Jogador X";

        $processManager = new ProcessManager();
        $result = $processManager->approveRequest($admin, $playerName);

        $this->assertTrue($result);
    }
}
