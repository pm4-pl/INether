<?php

namespace ipad54\netherblocks\blocks;

use pocketmine\block\Block;
use pocketmine\block\Transparent;
use pocketmine\block\utils\AnyFacingTrait;
use pocketmine\item\Item;
use pocketmine\math\Vector3;
use pocketmine\player\Player;
use pocketmine\world\BlockTransaction;

class Chain extends Transparent {

    use AnyFacingTrait;

    public function place(BlockTransaction $tx, Item $item, Block $blockReplace, Block $blockClicked, int $face, Vector3 $clickVector, ?Player $player = null): bool
    {
        $faces = [
            1 => 0,
            3 => 2,
            2 => 2,
            4 => 1,
            5 => 1
        ];
        $this->facing = $faces[$face] ?? $face;
        return parent::place($tx, $item, $blockReplace, $blockClicked, $face, $clickVector, $player); // TODO: Change the autogenerated stub
    }

    public function getStateBitmask(): int
    {
        return 0b11;
    }
}