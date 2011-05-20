<?php
// require class
require_once '../twitter.php';

// require framework
require_once 'PHPUnit/Framework/TestCase.php';


/**
 * Twitter test case.
 */
class TwitterTest extends PHPUnit_Framework_TestCase
{
	/**
	 * Instance
	 *
	 * @var Twitter
	 */
	private $twitter;


	/**
	 * Prepares the environment before running a test.
	 *
	 * @return	void
	 */
	protected function setUp()
	{
		// call parent
		parent::setUp();

		// create instance
		$this->twitter =new Twitter('nu_op_stubru', 'internet');
	}


	/**
	 * Cleans up the environment after running a test.
	 *
	 * @return	void
	 */
	protected function tearDown()
	{
		// reset
		$this->twitter =null;

		// call parent
		parent::tearDown();
	}


	/**
	 * Tests Twitter->createBlock()
	 */
	public function testCreateBlock()
	{
		// TODO Auto-generated TwitterTest->testCreateBlock()
		$this->markTestIncomplete("createBlock test not implemented");
		$this->twitter->createBlock(/* parameters */);
	}


	/**
	 * Tests Twitter->createFavorite()
	 */
	public function testCreateFavorite()
	{
		// TODO Auto-generated TwitterTest->testCreateFavorite()
		$this->markTestIncomplete("createFavorite test not implemented");
		$this->twitter->createFavorite(/* parameters */);

	}


	/**
	 * Tests Twitter->createFriendship()
	 */
	public function testCreateFriendship()
	{
		$response = $this->twitter->createFriendship('tijsverkoyen');

		$this->assertType('array', $response);
	}


	/**
	 * Tests Twitter->deleteBlock()
	 */
	public function testDeleteBlock()
	{
		// TODO Auto-generated TwitterTest->testDeleteBlock()
		$this->markTestIncomplete("deleteBlock test not implemented");

		$this->twitter->deleteBlock(/* parameters */);

	}


	/**
	 * Tests Twitter->deleteDirectMessage()
	 */
	public function testDeleteDirectMessage()
	{
		// TODO Auto-generated TwitterTest->testDeleteDirectMessage()
		$this->markTestIncomplete("deleteDirectMessage test not implemented");

		$this->twitter->deleteDirectMessage(/* parameters */);

	}


	/**
	 * Tests Twitter->deleteFavorite()
	 */
	public function testDeleteFavorite()
	{
		// TODO Auto-generated TwitterTest->testDeleteFavorite()
		$this->markTestIncomplete("deleteFavorite test not implemented");

		$this->twitter->deleteFavorite(/* parameters */);

	}


	/**
	 * Tests Twitter->deleteFriendship()
	 */
	public function testDeleteFriendship()
	{
		// TODO Auto-generated TwitterTest->testDeleteFriendship()
		$this->markTestIncomplete("deleteFriendship test not implemented");

		$this->twitter->deleteFriendship(/* parameters */);

	}


	/**
	 * Tests Twitter->deleteStatus()
	 */
	public function testDeleteStatus()
	{
		// TODO Auto-generated TwitterTest->testDeleteStatus()
		$this->markTestIncomplete("deleteStatus test not implemented");

		$this->twitter->deleteStatus(/* parameters */);

	}


	/**
	 * Tests Twitter->endSession()
	 */
	public function testEndSession()
	{
		// TODO Auto-generated TwitterTest->testEndSession()
		$this->markTestIncomplete("endSession test not implemented");

		$this->twitter->endSession(/* parameters */);

	}


	/**
	 * Tests Twitter->existsBlock()
	 */
	public function testExistsBlock()
	{
		// TODO Auto-generated TwitterTest->testExistsBlock()
		$this->markTestIncomplete("existsBlock test not implemented");

		$this->twitter->existsBlock(/* parameters */);

	}


	/**
	 * Tests Twitter->existsFriendship()
	 */
	public function testExistsFriendship()
	{
		$this->assertTrue($this->twitter->existsFriendship('nu_op_stubru', 'tijsverkoyen'));
	}


	/**
	 * Tests Twitter->follow()
	 */
	public function testFollow()
	{
		// TODO Auto-generated TwitterTest->testFollow()
		$this->markTestIncomplete("follow test not implemented");

		$this->twitter->follow(/* parameters */);

	}


	/**
	 * Tests Twitter->getBlocked()
	 */
	public function testGetBlocked()
	{
		// TODO Auto-generated TwitterTest->testGetBlocked()
		$this->markTestIncomplete("getBlocked test not implemented");

		$this->twitter->getBlocked(/* parameters */);

	}


	/**
	 * Tests Twitter->getBlockedIds()
	 */
	public function testGetBlockedIds()
	{
		// TODO Auto-generated TwitterTest->testGetBlockedIds()
		$this->markTestIncomplete("getBlockedIds test not implemented");

		$this->twitter->getBlockedIds(/* parameters */);

	}


	/**
	 * Tests Twitter->getDirectMessages()
	 */
	public function testGetDirectMessages()
	{
		// TODO Auto-generated TwitterTest->testGetDirectMessages()
		$this->markTestIncomplete("getDirectMessages test not implemented");

		$this->twitter->getDirectMessages(/* parameters */);

	}


	/**
	 * Tests Twitter->getFavorites()
	 */
	public function testGetFavorites()
	{
		// TODO Auto-generated TwitterTest->testGetFavorites()
		$this->markTestIncomplete("getFavorites test not implemented");

		$this->twitter->getFavorites(/* parameters */);

	}


	/**
	 * Tests Twitter->getFollowerIds()
	 */
	public function testGetFollowerIds()
	{
		// TODO Auto-generated TwitterTest->testGetFollowerIds()
		$this->markTestIncomplete("getFollowerIds test not implemented");

		$this->twitter->getFollowerIds(/* parameters */);

	}


	/**
	 * Tests Twitter->getFollowers()
	 */
	public function testGetFollowers()
	{
		// TODO Auto-generated TwitterTest->testGetFollowers()
		$this->markTestIncomplete("getFollowers test not implemented");

		$this->twitter->getFollowers(/* parameters */);

	}


	/**
	 * Tests Twitter->getFriendIds()
	 */
	public function testGetFriendIds()
	{
		// TODO Auto-generated TwitterTest->testGetFriendIds()
		$this->markTestIncomplete("getFriendIds test not implemented");

		$this->twitter->getFriendIds(/* parameters */);

	}


	/**
	 * Tests Twitter->getFriends()
	 */
	public function testGetFriends()
	{
		// TODO Auto-generated TwitterTest->testGetFriends()
		$this->markTestIncomplete("getFriends test not implemented");

		$this->twitter->getFriends(/* parameters */);

	}


	/**
	 * Tests Twitter->getFriendship()
	 */
	public function testGetFriendship()
	{
		// TODO Auto-generated TwitterTest->testGetFriendship()
		$this->markTestIncomplete("getFriendship test not implemented");

		$this->twitter->getFriendship(/* parameters */);

	}


	/**
	 * Tests Twitter->getFriendsTimeline()
	 */
	public function testGetFriendsTimeline()
	{
		$response = $this->twitter->getFriendsTimeline();

		$this->assertType('array', $response);
	}


	/**
	 * Tests Twitter->getMentionsReplies()
	 */
	public function testGetMentionsReplies()
	{
		// TODO Auto-generated TwitterTest->testGetMentionsReplies()
		$this->markTestIncomplete("getMentionsReplies test not implemented");

		$this->twitter->getMentionsReplies(/* parameters */);

	}


	/**
	 * Tests Twitter->getPublicTimeline()
	 */
	public function testGetPublicTimeline()
	{
		$response = $this->twitter->getPublicTimeline();

		$this->assertType('array', $response);
		$this->assertEquals(20, count($response));
	}


	/**
	 * Tests Twitter->getRateLimitStatus()
	 */
	public function testGetRateLimitStatus()
	{
		// TODO Auto-generated TwitterTest->testGetRateLimitStatus()
		$this->markTestIncomplete("getRateLimitStatus test not implemented");

		$this->twitter->getRateLimitStatus(/* parameters */);

	}


	/**
	 * Tests Twitter->getSentDirectMessages()
	 */
	public function testGetSentDirectMessages()
	{
		// TODO Auto-generated TwitterTest->testGetSentDirectMessages()
		$this->markTestIncomplete("getSentDirectMessages test not implemented");

		$this->twitter->getSentDirectMessages(/* parameters */);

	}


	/**
	 * Tests Twitter->getStatus()
	 */
	public function testGetStatus()
	{
		// TODO Auto-generated TwitterTest->testGetStatus()
		$this->markTestIncomplete("getStatus test not implemented");

		$this->twitter->getStatus(/* parameters */);

	}


	/**
	 * Tests Twitter->getUser()
	 */
	public function testGetUser()
	{
		// TODO Auto-generated TwitterTest->testGetUser()
		$this->markTestIncomplete("getUser test not implemented");

		$this->twitter->getUser(/* parameters */);

	}


	/**
	 * Tests Twitter->getUserTimeline()
	 */
	public function testGetUserTimeline()
	{
		// TODO Auto-generated TwitterTest->testGetUserTimeline()
		$this->markTestIncomplete("getUserTimeline test not implemented");

		$this->twitter->getUserTimeline(/* parameters */);

	}


	/**
	 * Tests Twitter->sendDirectMessage()
	 */
	public function testSendDirectMessage()
	{
		// TODO Auto-generated TwitterTest->testSendDirectMessage()
		$this->markTestIncomplete("sendDirectMessage test not implemented");

		$this->twitter->sendDirectMessage(/* parameters */);

	}


	/**
	 * Tests Twitter->test()
	 */
	public function testTest()
	{
		// TODO Auto-generated TwitterTest->testTest()
		$this->markTestIncomplete("test test not implemented");

		$this->twitter->test(/* parameters */);

	}

	/**
	 * Tests Twitter->unfollow()
	 */
	public function testUnfollow()
	{
		// TODO Auto-generated TwitterTest->testUnfollow()
		$this->markTestIncomplete("unfollow test not implemented");

		$this->twitter->unfollow(/* parameters */);

	}


	/**
	 * Tests Twitter->updateDeliveryDevice()
	 */
	public function testUpdateDeliveryDevice()
	{
		// TODO Auto-generated TwitterTest->testUpdateDeliveryDevice()
		$this->markTestIncomplete("updateDeliveryDevice test not implemented");

		$this->twitter->updateDeliveryDevice(/* parameters */);

	}


	/**
	 * Tests Twitter->updateProfile()
	 */
	public function testUpdateProfile()
	{
		// TODO Auto-generated TwitterTest->testUpdateProfile()
		$this->markTestIncomplete("updateProfile test not implemented");

		$this->twitter->updateProfile(/* parameters */);

	}


	/**
	 * Tests Twitter->updateProfileBackgroundImage()
	 */
	public function testUpdateProfileBackgroundImage()
	{
		// TODO Auto-generated TwitterTest->testUpdateProfileBackgroundImage()
		$this->markTestIncomplete("updateProfileBackgroundImage test not implemented");

		$this->twitter->updateProfileBackgroundImage(/* parameters */);

	}


	/**
	 * Tests Twitter->updateProfileColors()
	 */
	public function testUpdateProfileColors()
	{
		// TODO Auto-generated TwitterTest->testUpdateProfileColors()
		$this->markTestIncomplete("updateProfileColors test not implemented");

		$this->twitter->updateProfileColors(/* parameters */);

	}


	/**
	 * Tests Twitter->updateProfileImage()
	 */
	public function testUpdateProfileImage()
	{
		// TODO Auto-generated TwitterTest->testUpdateProfileImage()
		$this->markTestIncomplete("updateProfileImage test not implemented");

		$this->twitter->updateProfileImage(/* parameters */);

	}


	/**
	 * Tests Twitter->updateStatus()
	 */
	public function testUpdateStatus()
	{
		// TODO Auto-generated TwitterTest->testUpdateStatus()
		$this->markTestIncomplete("updateStatus test not implemented");

		$this->twitter->updateStatus(/* parameters */);

	}


	/**
	 * Tests Twitter->verifyCrendentials()
	 */
	public function testVerifyCredentials()
	{
		$this->assertTrue($this->twitter->verifyCredentials());
	}
}

