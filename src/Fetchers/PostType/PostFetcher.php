<?php
namespace Industrious\WpHelpers\Fetchers\PostType;

use Industrious\WpHelpers\Fetchers\TransientPostFetcher;

/**
 * Class PostFetcher
 */
class PostFetcher extends TransientPostFetcher
{
    /**
     * @var string
     */
    protected $custom_post_type = 'post';

    /**
     * @var string
     */
    protected $transient_key = 'post_fetcher';

    /**
     * @param string $post_type
     *
     * @return $this
     */
    /**
     * @param string $post_type
     *
     * @return $this
     */
    public function setPostType($post_type = '')
    {
        $this->custom_post_type = $post_type;

        $key = implode('-', (array) $post_type);

        $this->transient_key = str_replace(
            'post_',
            $key . '_',
            $this->transient_key
        );

        return $this;
    }
}
