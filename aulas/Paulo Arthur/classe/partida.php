<?php
	class Partida{
		public static function armadilha($p) {
			$v = $p->getVida();
			$p->setVida($v - 15);
		}
	}
?>