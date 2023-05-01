<?php

namespace Zman\Moadim;

trait Yuntif
{
    /**
     * Checks if the date is a yuntif.
     *
     * @param  bool $galus
     * @return bool
     */
    public function isYuntif($galus = null)
    {
        return $this->isPesachYuntif($galus)
            || $this->isShavuos($galus)
            || $this->isSukkosYuntif($galus)
            || $this->isRoshHashana()
            || $this->isYomKippur()
            || $this->isShminiAtzeres()
            || $this->isSimchasTorah($galus);
    }

    /**
     * The Yuntif of Pesach is the 15th and 21st of Nissan,
     * and includes the 16th and 22nd in Galus.
     *
     * @param  bool $galus
     * @return bool
     */
    public function isPesachYuntif($galus = null)
    {
        return $this->isPesach($galus) && !$this->isCholHamoed($galus);
    }

    /**
     * The Yuntif of Sukkos is the 15th and 16th of Tishrei
     * in Galus, but just the 15th in E"Y.
     *
     * @param  bool $galus
     * @return bool
     */
    public function isSukkosYuntif($galus = null)
    {
        return $this->isSukkos($galus) && !$this->isCholHamoed($galus);
    }
}
