<?php

namespace Zman\Moadim;

trait CholHamoed
{
    /**
     * Checks if the date is Chol HaMoed.
     *
     * @param  bool $galus
     * @return bool
     */
    public function isCholHamoed($galus = null)
    {
        return $this->isCholHamoedPesach($galus) || $this->isCholHamoedSukkos($galus);
    }

    /**
     * Chol Hamoed Pesach lasts from the 17th of
     * Nissan to the 20th of Nissan in Galus,
     * and also includes the 16th in E"Y.
     *
     * @param  bool $galus
     * @return bool
     */
    public function isCholHamoedPesach($galus = null)
    {
        $galus = $this->getGalusMode($galus);

        return $this->jewishMonth === 8
            && $this->jewishDay <= 20
            && ($galus ? $this->jewishDay >= 17 : $this->jewishDay >= 16);
    }

    /**
     * Chol Hamoed Sukkos lasts from the 17th of
     * Tishrei to the 21st of Tishrei in Galus,
     * and also includes the 16th in E"Y.
     *
     * @param  bool $galus
     * @return bool
     */
    public function isCholHamoedSukkos($galus = null)
    {
        $galus = $this->getGalusMode($galus);

        return $this->jewishMonth === 1
            && $this->jewishDay <= 21
            && ($galus ? $this->jewishDay >= 17 : $this->jewishDay >= 16);
    }
}
