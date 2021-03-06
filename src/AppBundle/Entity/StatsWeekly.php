<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WeeklyStats
 *
 * @ORM\Table(name="stats_weekly")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StatsWeeklyRepository")
 */
class StatsWeekly
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="year", type="integer")
     */
    private $year;

    /**
     * @var int
     *
     * @ORM\Column(name="month", type="integer")
     */
    private $month;
    
    /**
     * @var int
     *
     * @ORM\Column(name="week", type="integer")
     */
    private $week;
    
    /**
     * @var int
     *
     * @ORM\Column(name="day", type="integer")
     */
    private $day;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="subscribers", type="integer")
     */
    private $subscribers;

    /**
     * @var int
     *
     * @ORM\Column(name="subscribersperiod", type="integer")
     */
    private $subscribersperiod;

    /**
     * @var int
     *
     * @ORM\Column(name="unsubscribers", type="integer")
     */
    private $unsubscribers;
    
    /**
     * @var int
     *
     * @ORM\Column(name="unsubscribersperiod", type="integer")
     */
    private $unsubscribersperiod;

    /**
     * @var int
     *
     * @ORM\Column(name="campaigns", type="integer")
     */
    private $campaignssent;
    
     /**
     * @var int
     *
     * @ORM\Column(name="campaignsperiod", type="integer")
     */
    private $campaignsperiod;

    /**
     * @var int
     *
     * @ORM\Column(name="emailssent", type="integer")
     */
    private $emailssent;
    
    /**
     * @var int
     *
     * @ORM\Column(name="emailssentperiod", type="integer")
     */
    private $emailssentperiod;

    /**
     * @var int
     *
     * @ORM\Column(name="revenue", type="integer")
     */
    private $revenue;
    
    /**
     * @var int
     *
     * @ORM\Column(name="revenueperiod", type="integer")
     */
    private $revenueperiod;

    /**
     * @var int
     *
     * @ORM\Column(name="clicks", type="integer")
     */
    private $clicks;
    
    /**
     * @var int
     *
     * @ORM\Column(name="clicksperiod", type="integer")
     */
    private $clicksperiod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datemodified", type="datetime")
     */
    private $datemodified;

   

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set year
     *
     * @param integer $year
     *
     * @return StatsWeekly
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set month
     *
     * @param integer $month
     *
     * @return StatsWeekly
     */
    public function setMonth($month)
    {
        $this->month = $month;

        return $this;
    }

    /**
     * Get month
     *
     * @return integer
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Set week
     *
     * @param integer $week
     *
     * @return StatsWeekly
     */
    public function setWeek($week)
    {
        $this->week = $week;

        return $this;
    }

    /**
     * Get week
     *
     * @return integer
     */
    public function getWeek()
    {
        return $this->week;
    }

    /**
     * Set day
     *
     * @param integer $day
     *
     * @return StatsWeekly
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return integer
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return StatsWeekly
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set subscribers
     *
     * @param integer $subscribers
     *
     * @return StatsWeekly
     */
    public function setSubscribers($subscribers)
    {
        $this->subscribers = $subscribers;

        return $this;
    }

    /**
     * Get subscribers
     *
     * @return integer
     */
    public function getSubscribers()
    {
        return $this->subscribers;
    }

    /**
     * Set subscribersperiod
     *
     * @param integer $subscribersperiod
     *
     * @return StatsWeekly
     */
    public function setSubscribersperiod($subscribersperiod)
    {
        $this->subscribersperiod = $subscribersperiod;

        return $this;
    }

    /**
     * Get subscribersperiod
     *
     * @return integer
     */
    public function getSubscribersperiod()
    {
        return $this->subscribersperiod;
    }

    /**
     * Set unsubscribers
     *
     * @param integer $unsubscribers
     *
     * @return StatsWeekly
     */
    public function setUnsubscribers($unsubscribers)
    {
        $this->unsubscribers = $unsubscribers;

        return $this;
    }

    /**
     * Get unsubscribers
     *
     * @return integer
     */
    public function getUnsubscribers()
    {
        return $this->unsubscribers;
    }

    /**
     * Set unsubscribersperiod
     *
     * @param integer $unsubscribersperiod
     *
     * @return StatsWeekly
     */
    public function setUnsubscribersperiod($unsubscribersperiod)
    {
        $this->unsubscribersperiod = $unsubscribersperiod;

        return $this;
    }

    /**
     * Get unsubscribersperiod
     *
     * @return integer
     */
    public function getUnsubscribersperiod()
    {
        return $this->unsubscribersperiod;
    }

    /**
     * Set campaignssent
     *
     * @param integer $campaignssent
     *
     * @return StatsWeekly
     */
    public function setCampaignssent($campaignssent)
    {
        $this->campaignssent = $campaignssent;

        return $this;
    }

    /**
     * Get campaignssent
     *
     * @return integer
     */
    public function getCampaignssent()
    {
        return $this->campaignssent;
    }

    /**
     * Set campaignsperiod
     *
     * @param integer $campaignsperiod
     *
     * @return StatsWeekly
     */
    public function setCampaignsperiod($campaignsperiod)
    {
        $this->campaignsperiod = $campaignsperiod;

        return $this;
    }

    /**
     * Get campaignsperiod
     *
     * @return integer
     */
    public function getCampaignsperiod()
    {
        return $this->campaignsperiod;
    }

    /**
     * Set emailssent
     *
     * @param integer $emailssent
     *
     * @return StatsWeekly
     */
    public function setEmailssent($emailssent)
    {
        $this->emailssent = $emailssent;

        return $this;
    }

    /**
     * Get emailssent
     *
     * @return integer
     */
    public function getEmailssent()
    {
        return $this->emailssent;
    }

    /**
     * Set emailssentperiod
     *
     * @param integer $emailssentperiod
     *
     * @return StatsWeekly
     */
    public function setEmailssentperiod($emailssentperiod)
    {
        $this->emailssentperiod = $emailssentperiod;

        return $this;
    }

    /**
     * Get emailssentperiod
     *
     * @return integer
     */
    public function getEmailssentperiod()
    {
        return $this->emailssentperiod;
    }

    /**
     * Set revenue
     *
     * @param integer $revenue
     *
     * @return StatsWeekly
     */
    public function setRevenue($revenue)
    {
        $this->revenue = $revenue;

        return $this;
    }

    /**
     * Get revenue
     *
     * @return integer
     */
    public function getRevenue()
    {
        return $this->revenue;
    }

    /**
     * Set revenueperiod
     *
     * @param integer $revenueperiod
     *
     * @return StatsWeekly
     */
    public function setRevenueperiod($revenueperiod)
    {
        $this->revenueperiod = $revenueperiod;

        return $this;
    }

    /**
     * Get revenueperiod
     *
     * @return integer
     */
    public function getRevenueperiod()
    {
        return $this->revenueperiod;
    }

    /**
     * Set clicks
     *
     * @param integer $clicks
     *
     * @return StatsWeekly
     */
    public function setClicks($clicks)
    {
        $this->clicks = $clicks;

        return $this;
    }

    /**
     * Get clicks
     *
     * @return integer
     */
    public function getClicks()
    {
        return $this->clicks;
    }

    /**
     * Set clicksperiod
     *
     * @param integer $clicksperiod
     *
     * @return StatsWeekly
     */
    public function setClicksperiod($clicksperiod)
    {
        $this->clicksperiod = $clicksperiod;

        return $this;
    }

    /**
     * Get clicksperiod
     *
     * @return integer
     */
    public function getClicksperiod()
    {
        return $this->clicksperiod;
    }

    /**
     * Set datemodified
     *
     * @param \DateTime $datemodified
     *
     * @return StatsWeekly
     */
    public function setDatemodified($datemodified)
    {
        $this->datemodified = $datemodified;

        return $this;
    }

    /**
     * Get datemodified
     *
     * @return \DateTime
     */
    public function getDatemodified()
    {
        return $this->datemodified;
    }
}
