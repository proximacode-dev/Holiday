<?php

namespace ProximaCode\Holiday\Provider;

/**
 * Austrian holiday provider.
 *
 * Data taken from http://www.feiertage-oesterreich.at/2015/
 *
 * @author Robert Scherer <rs@scherer-software.de>
 * @since 2015-08-14
 */
class AT extends AbstractEaster
{

    public const STATE_B = 'Burgenland';
    public const STATE_K = 'Kärnten';
    public const STATE_NO = 'Niederösterreich';
    public const STATE_OO = 'Oberösterreich';
    public const STATE_S = 'Salzburg';
    public const STATE_ST = 'Steiermark';
    public const STATE_T = 'Tirol';
    public const STATE_V = 'Vorarlberg';
    public const STATE_W = 'Wien';

    /**
     * @param int $year
     *
     * @return array
     */
    public function getHolidaysByYear($year)
    {
        $easter = $this->getEasterDates($year);

        $holidays = array(
            // Fixed dates
            '01-01' => $this->createData('Neujahr'),
            '01-06' => $this->createData('Heilige Drei Könige'),
            '11-01' => $this->createData('Allerheiligen'),
            '08-15' => $this->createData('Mariä Himmelfahrt'),
            '05-01' => $this->createData('Staatsfeiertag'),
            '10-26' => $this->createData('Nationalfeiertag'),
            '12-08' => $this->createData('Mariä Empfängnis'),
            '12-25' => $this->createData('Weihnachten'),
            '12-26' => $this->createData('Stefanitag'),

            // Variable dates
            $easter['easterSunday']->format(self::DATE_FORMAT)    => $this->createData('Ostersonntag'),
            $easter['easterMonday']->format(self::DATE_FORMAT)    => $this->createData('Ostermontag'),
            $easter['ascensionDay']->format(self::DATE_FORMAT)    => $this->createData('Christi Himmelfahrt'),
            $easter['pentecostMonday']->format(self::DATE_FORMAT) => $this->createData('Pfingstmontag'),
            $easter['corpusChristi']->format(self::DATE_FORMAT)   => $this->createData('Fronleichnam'),
        );

        return $holidays;
    }
}
