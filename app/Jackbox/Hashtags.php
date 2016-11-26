<?php

namespace App\Jackbox;

class Hashtags
{
	protected static $hashtags = [
		"yakovmeister",
		"pushMid",
		"donationForPoorKid",
		"unlockAlmsGiverAchievement",
		"maawaKaPlease",
		"noticeMeSenpai",
		"iSayHeyStartDash",
		"taraDota2",
		"constructingThoughts",
		"iStupid",
		"youSayGoodbyeAndISayHello",
		"weCanWorkItOut",
		"allYouNeedIsLove",
		"pengePagkain",
		"donateSomethingPlease",
		"giveAlmsToThePoorKid",
		"adoptMe",
		"loveNeedNot"
	];

	public static function getAHashtag()
	{
		$iHashtagSize = count(static::$hashtags);
		$iHashtagPos = rand(0, ($iHashtagSize - 1));

		return "#".static::$hashtags[$iHashtagPos];
	}
}