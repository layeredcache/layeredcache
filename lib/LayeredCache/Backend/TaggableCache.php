<?php
namespace LayeredCache\Backend;

interface TaggableCache extends Cache
{
    /**
     * @param string $id The cache id.
     * @param string|array $data The cache data.
     * @param int $lifeTime The cache lifetime in seconds (0 => infinite).
     * @param string[] $tags A set of tags for the cache.
     * @return boolean true if the entry was successfully stored, false otherwise.
     */
    function put($id, $data, $lifeTime = 0, $tags = array());

    /**
     * @param string $id The cache id.
     * @param string[] $tags A set of tags to be added for the cache
     * @return bool
     */
    public function addTags($id, array $tags);

    /**
     * @param string $id
     * @param string[] $tags
     * @return bool
     */
    public function removeTags($id, array $tags);

    /**
     * @param string $id The cache id.
     * @param string[] $tags
     * @return bool
     */
    public function setTags($id, array $tags);

    /**
     * @param string $id The cache id.
     * @return string[] The set of tags associated with the cache
     */
    public function getTags($id);

    /**
     * @param string[] $tags
     * @return bool
     */
    public function clearByTags(array $tags);

    /**
     * @param string[] $tags
     * @return bool
     */
    public function clearByAnyTags(array $tags);

}