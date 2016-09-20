<?php

namespace CatchOfTheDay\DevExamBundle\Manager;
use CatchOfTheDay\DevExamBundle\Model\TodoListItem;

class TodoListManager
{
    const DATA_FILE = '@CatchOfTheDayDevExamBundle/Resources/data/todo-list.json';

    /**
     * @var \Symfony\Component\Config\FileLocatorInterface
     */
    private $fileLocator;

    /**
     * @param \Symfony\Component\Config\FileLocatorInterface $fileLocator
     */
    public function __construct($fileLocator)
    {
        $this->fileLocator = $fileLocator;
    }

    /**
     * @return string
     */
    private function getDataFilePath()
    {
        return $this->fileLocator->locate(self::DATA_FILE);
    }

    /**
     * @return \CatchOfTheDay\DevExamBundle\Model\TodoListItem[]
     */
    public function read()
    {
        $jsonFile = $this->getDataFilePath();

        // TODO - Parse JSON and translate to array of TodoListItem. Hint: TodoListItem::fromAssocArray()
        $inp = file_get_contents($jsonFile);
        $tempArray = json_decode($inp);

        return $tempArray;
    }

    /**
     * @param \CatchOfTheDay\DevExamBundle\Model\TodoListItem[] $items
     */
    public function write(array $items)
    {
        $jsonFile = $this->getDataFilePath();

        // TODO - Serialise $items to JSON and write to $jsonFile. Hint: TodoListItem::toAssocArray()
        $fs = new \Symfony\Component\Filesystem\Filesystem();

        $jsonData = json_encode($items);

        try {
            $fs->dumpFile($jsonFile, $jsonData);
        }
        catch(IOException $e) {
            throw $e;
        }
    }
}