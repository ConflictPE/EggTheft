<?php

/**
 * EggTheft – DiamondGenerator.php
 *
 * Copyright (C) 2017 Jack Noordhuis
 *
 * This is private software, you cannot redistribute and/or modify it in any way
 * unless given explicit permission to do so. If you have not been given explicit
 * permission to view or modify this software you should take the appropriate actions
 * to remove this software from your device immediately.
 *
 * @author Jack Noordhuis
 *
 * Created on 13/8/17 at 9:17 PM
 *
 */

namespace conflict\eggtheft\map\generator\defaults;

use conflict\eggtheft\map\generator\UpgradingGenerator;
use pocketmine\item\Item;

class DiamondGenerator extends UpgradingGenerator {

	public function getPossibleDrops() : array {
		return [
			// item id, [tier => spawn interval], max spawn count
			[Item::DIAMOND, [-1, 60, 50, 40, 30], 8]
		];
	}

}