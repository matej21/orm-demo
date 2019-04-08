<?php declare(strict_types = 1);

namespace AppTests;

use Mangoweb\Tester\Infrastructure\TestCase;
use Nextras\Orm\Model\Model;
use OrmDemo\Post;
use OrmDemo\PostsRepository;
use Tester\Assert;
use Tester\Environment;

require_once __DIR__ . '/../bootstrap.php';


/**
 * @multiple 16
 */
class CreatePostTest extends TestCase
{
	public function testPostA(Model $orm)
	{
		Assert::count(0, $orm->getRepository(PostsRepository::class)->findAll());
		$post = new Post();
		$post->title = 'Hello world ' . getenv(Environment::THREAD);
		$post->content = 'bla bla bla';
		$orm->persist($post);
		$orm->flush();
		Assert::count(1, $orm->getRepository(PostsRepository::class)->findAll());
	}
}


CreatePostTest::run(getContainerFactory());
