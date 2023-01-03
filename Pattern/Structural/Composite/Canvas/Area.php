<?php
namespace Kupman\Pattern\Structural\Composite\Canvas;

class Area implements ICanvas
{
    /** @var int $height description */
    protected $height = null;
    /** @var int $width description */
    protected $width = null;

    /** @var ICanvas[] $items description */
    protected $items = null;

    public function __construct(int $height, int $width) {
        $this->height = $height;
        $this->width = $width;
    }
    public function draw()
    {
        output("Area {$this->height} x {$this->width}");
        foreach ($this->items as $key => $item) {
            $item->draw();
        }
    }
    public function addItem(ICanvas $item) {
        $this->items[] = $item;
    }
}

?>