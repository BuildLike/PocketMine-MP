<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 *
 *
*/

declare(strict_types=1);

namespace pocketmine\level\format;

use function str_repeat;

class EmptySubChunk implements SubChunkInterface{
	/** @var EmptySubChunk */
	private static $instance;

	public static function getInstance() : self{
		if(self::$instance === null){
			self::$instance = new self();
		}

		return self::$instance;
	}

	public function isEmpty(bool $checkLight = true) : bool{
		return true;
	}

	public function getFullBlock(int $x, int $y, int $z) : int{
		return 0;
	}

	public function setFullBlock(int $x, int $y, int $z, int $block) : void{

	}

	public function getBlockLayers() : array{
		return [];
	}

	public function getBlockLight(int $x, int $y, int $z) : int{
		return 0;
	}

	public function setBlockLight(int $x, int $y, int $z, int $level) : bool{
		return false;
	}

	public function getBlockSkyLight(int $x, int $y, int $z) : int{
		return 15;
	}

	public function setBlockSkyLight(int $x, int $y, int $z, int $level) : bool{
		return false;
	}

	public function getHighestBlockAt(int $x, int $z) : int{
		return -1;
	}

	public function getBlockLightArray() : string{
		return str_repeat("\x00", 2048);
	}

	public function setBlockLightArray(string $data) : void{

	}

	public function getBlockSkyLightArray() : string{
		return str_repeat("\xff", 2048);
	}

	public function setBlockSkyLightArray(string $data) : void{

	}
}
