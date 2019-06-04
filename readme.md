Lazy Tracy
==========

Lazy loaded Tracy panel content via ajax request.


Installation
------------

The recommended way to is via Composer:

```
composer require pilotcz/lazy-tracy
```

Usage
-----
```php
use PilotCz\LazyTracy\Panel;

class CustomTracyPanel extends Panel
{
    /**
     * Tracy constructor.
     * @param LinkGenerator $linkGenerator
     * @throws InvalidLinkException
     */
    public function __construct(LinkGenerator $linkGenerator)
    {
    
        $url = $linkGenerator->link('System:gitPanel');
        
        $this->setUid(self::class);
        $this->setUrl($url);
        $this->setTabText('Tab Text Here');
        $this->setTabIcon('<svg>....</svg>');
    }
}
```
