<?php

namespace ProximaCode\Holiday\Provider;

/**
 * Italian holiday provider
 *
 * @author Giorgio Cefaro <giorgio.cefaro@gmail.com>
 * @since 2015-11-03
 */
class IT extends AbstractEaster
{
    /**
     * @param int $year
     *
     * @return mixed
     */
    public function getHolidaysByYear($year)
    {
        $easter = $this->getEasterDates($year);

        $holidays = array(
            '01-01' => $this->createData('Capodanno'),
            '01-06' => $this->createData('Epifania'),
            '04-25' => $this->createData('Liberazione dal nazifascismo (1945)'),
            '05-01' => $this->createData('Festa del lavoro'),
            '06-02' => $this->createData('Festa della Repubblica'),
            '08-15' => $this->createData('Assunzione di Maria'),
            '11-01' => $this->createData('Ognissanti'),
            '12-08' => $this->createData('Immacolata Concezione'),
            '12-25' => $this->createData('Natale di Gesù'),
            '12-26' => $this->createData('Santo Stefano'),
            // Variable dates
            $easter['easterSunday']->format(self::DATE_FORMAT)    => $this->createData('Pasqua'),
            $easter['easterMonday']->format(self::DATE_FORMAT)    => $this->createData('Lunedì di Pasqua'),
        );

        return $holidays;
    }
}
