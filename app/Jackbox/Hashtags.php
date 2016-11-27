<?php

namespace App\Jackbox;

class Hashtags
{
	protected static $instance;

	protected $hashtags = [
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

	protected $headerMessages = [
		"Cuz smplct iz owezum!",
		"Unicorn! nn dat unicorn?",
		"", //intentionally left blank
		"Ain't nobody got time for fancy",
		"stupid since 1996",
		"hate generating machine",
		"fluently sarcastic",
		"?",
		"no can do",
		"for god's sake just give me a goddamn break",
		"404 this is not a page"
	];

	public function getAHashtag()
	{
		$iHashtagPos = rand(0, ((count($this->hashtags)) - 1));

		return "#{$this->hashtags[$iHashtagPos]}";
	}

	public function getAHeaderMessage()
	{
		$iHeaderMessagePos = rand(0, ((count($this->headerMessages)) - 1));

		return $this->headerMessages[$iHeaderMessagePos];
	}

	/**
	 * [singleton is evil, return Hashtag instance on static call]
	 * @return \App\Jackbox\Hashtags
	 */
	public static function i()
	{
		return isset(static::$instance) ? static::$instance : new Hashtags;
	}
}