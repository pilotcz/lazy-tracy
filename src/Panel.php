<?php
namespace PilotCz\LazyTracy;

use Tracy;

class Panel implements Tracy\IBarPanel
{
    /**
     * UID
     * @var string
     */
    private $uid;

    /**
     * URL
     * @var string
     */
    private $url;

    /**
     * Tab text
     * @var string
     */
    private $tabText;

    /**
     * Tab icon
     * @var string
     */
    private $tabIcon;

    /**
     * Get panel
     * @author Miroslav Kovář
     * @return string
     */
    public function getPanel(): string
    {
        ob_start();
        require __DIR__ . '/templates/Panel.phtml';
        return ob_get_clean();
    }

    /**
     * Get tab
     * @author Miroslav Kovář
     * @return string
     */
    public function getTab(): string
    {
        ob_start();
        require __DIR__ . '/templates/Tab.phtml';
        return ob_get_clean();
    }

    /**
     * @param string $tabText
     * @return Panel
     */
    public function setTabText(string $tabText): Panel
    {
        $this->tabText = $tabText;
        return $this;
    }

    /**
     * @param string $tabIcon
     * @return Panel
     */
    public function setTabIcon(string $tabIcon): Panel
    {
        $this->tabIcon = $tabIcon;
        return $this;
    }

    /**
     * @param string $uid
     * @return Panel
     */
    public function setUid(string $uid): Panel
    {
        $this->uid = strtr($uid, ['\\' => '-']);
        return $this;
    }

    /**
     * @param string $url
     * @return Panel
     */
    public function setUrl(string $url): Panel
    {
        $this->url = $url;
        return $this;
    }
}
