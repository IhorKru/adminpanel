<?php

namespace AppBundle\Controller;

use AppBundle\Entity\StatsYearly;
use AppBundle\Entity\StatsMonthly;
use AppBundle\Entity\StatsWeekly;
use AppBundle\Entity\StatsDaily;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use DateTime;
use Symfony\Component\Validator\Constraints\Date;

class StatsRecalculation extends Controller
{
    
    /**
     * @Route("/allstats", name="allstats")
     */
    public function allstatsAction(Request $request)
    {
        $this ->annualstatsAction($request);
        $this ->monthlystatsAction($request);
        $this ->weeklystatsAction($request);
        $this ->dailystatsAction($request);
        
        return new Response('<html><body>All stats updated</body></html>');
    }
    
    /**
     * @Route("/annualstats", name="annualstats")
     */
    public function annualstatsAction(Request $request)
    {
        $newYearlystats = new StatsYearly();
        $em = $this ->getDoctrine() ->getManager();

            ///YEARLY SUBSCRIBER DATA/////////////////
            //total count of active subscribers to date
                $query = $em->createQuery('SELECT COUNT(p.id) 
                                           FROM AppBundle:SubscriberDetails p 
                                           WHERE NOT EXISTS (SELECT 1 FROM AppBundle:SubscriberOptOutDetails s WHERE p.id = s.user)');
                $netsubscribers = $query ->getSingleScalarResult();
            //count of subscribers this year
                $query1 = $em->createQuery('SELECT COUNT(p.id) 
                                            FROM AppBundle:SubscriberDetails p 
                                            WHERE NOT EXISTS (SELECT 1 FROM AppBundle:SubscriberOptOutDetails s WHERE p.id = s.user)
                                                AND year(p.datecreated) = year(now())');
                $netsubscribersmnth = $query1 ->getSingleScalarResult();
            ///YEARLY UNSUBSCRIBERS DATA//////////////
            //total unsubscribed
                $query2 = $em->createQuery('SELECT COUNT(p.id) 
                                            FROM AppBundle:SubscriberDetails p 
                                            WHERE EXISTS (SELECT 1 FROM AppBundle:SubscriberOptOutDetails s WHERE p.id = s.user)');
                $unsubscribers = $query2 ->getSingleScalarResult();
            //total unsubscribed this year
                $query3 = $em->createQuery('SELECT COUNT(p.id) 
                                            FROM AppBundle:SubscriberDetails p 
                                            WHERE EXISTS (SELECT 1 FROM AppBundle:SubscriberOptOutDetails s 
                                                            WHERE p.id = s.user
                                                            AND year(s.optoutdate) = year(now()))');
                $unsubscribedmnth = $query3 ->getSingleScalarResult();
            ///YEARLY CAMPAIGNS DATA//////////////////////
            //total campaigns sent
                $query4 = $em->createQuery('SELECT COUNT(c.id) FROM AppBundle:Campaigns c');
                $totalcampaignssent = $query4 ->getSingleScalarResult();

            //campaigns sent this month
                $query5 = $em->createQuery('SELECT COUNT(c.id) 
                                            FROM AppBundle:Campaigns c 
                                            WHERE year(c.sendDate) = year(now())');
                $campaignssentmnth = $query5 ->getSingleScalarResult();
            //YEARLY EMAILS DATA
            //emails sent total
                $query7 = $em->createQuery('SELECT COUNT(s.id) 
                                            FROM AppBundle:Subscribers s, AppBundle:Lists l, AppBundle:Campaigns c 
                                            WHERE s.list = l.id 
                                                AND l.id = c.lists');
                $totalemailssent = $query7 ->getSingleScalarResult();
            //emails sent this month
                $query8 = $em->createQuery('SELECT COUNT(s.id) 
                                            FROM AppBundle:Subscribers s, AppBundle:Lists l, AppBundle:Campaigns c 
                                            WHERE s.list = l.id 
                                                AND l.id = c.lists 
                                                AND year(c.sendDate) = year(now())');
                $emailssentmnth = $query8 ->getSingleScalarResult();

            //total clicks generated
            $totalclicks = "";

            //total revenue
            $revenue = "";

        // check this year already exists//
        $curryear = date("Y");
        $currmonth = date("m");
        $currweek = date("W");
        $currday = date("d");
        $yearstats = new StatsYearly();

        $yearlystats = $em->getRepository('AppBundle:StatsYearly')->findOneBy(['year' => $curryear]);

        if (!$yearlystats) {
            $newYearlystats ->setYear($curryear);
            $newYearlystats ->setMonth($currmonth);
            $newYearlystats ->setWeek($currweek);
            $newYearlystats ->setDay($currday);
            $newYearlystats ->setDate(new DateTime());
            $newYearlystats ->setSubscribers($netsubscribers);
            $newYearlystats ->setSubscribersperiod($netsubscribersmnth);
            $newYearlystats ->setUnsubscribers($unsubscribers);
            $newYearlystats ->setUnsubscribersperiod($unsubscribedmnth);
            $newYearlystats ->setCampaignssent($totalcampaignssent);
            $newYearlystats ->setCampaignsperiod($campaignssentmnth);
            $newYearlystats ->setEmailssent($totalemailssent);
            $newYearlystats ->setEmailssentperiod($emailssentmnth);
            $newYearlystats ->setClicks($totalclicks);
            $newYearlystats ->setClicksperiod($totalclicks);
            $newYearlystats ->setRevenue($revenue);
            $newYearlystats ->setRevenueperiod($revenue);
            $newYearlystats ->setDatemodified(new DateTime());
            $em->persist($newYearlystats);
            $em->flush();
        } else {
            $newYearlystats = $em->getRepository('AppBundle:StatsYearly')->findOneBy(['year' => $curryear]);
            $newYearlystats ->setMonth($currmonth);
            $newYearlystats ->setWeek($currweek);
            $newYearlystats ->setDay($currday);
            $newYearlystats ->setDate(new DateTime());
            $newYearlystats ->setSubscribers($netsubscribers);
            $newYearlystats ->setSubscribersperiod($netsubscribersmnth);
            $newYearlystats ->setUnsubscribers($unsubscribers);
            $newYearlystats ->setUnsubscribersperiod($unsubscribedmnth);
            $newYearlystats ->setCampaignssent($totalcampaignssent);
            $newYearlystats ->setCampaignsperiod($campaignssentmnth);
            $newYearlystats ->setEmailssent($totalemailssent);
            $newYearlystats ->setEmailssentperiod($emailssentmnth);
            $newYearlystats ->setClicks($totalclicks);
            $newYearlystats ->setClicksperiod($totalclicks);
            $newYearlystats ->setRevenue($revenue);
            $newYearlystats ->setRevenueperiod($revenue);
            $newYearlystats ->setDatemodified(new DateTime());
            $em->flush();
        }

        return new Response('<html><body>Annual data updated</body></html>');
    }

    /**
     * @Route("/monthlystats", name="monthlystats")
     */
    public function monthlystatsAction(Request $request)
    {
        $newMonthlystats = new StatsMonthly();
        $em = $this ->getDoctrine() ->getManager();
        ///MONTHLY SUBSCRIBER DATA/////////////////
            //total count of active subscribers to date
                $query = $em->createQuery('SELECT COUNT(p.id) 
                                           FROM AppBundle:SubscriberDetails p 
                                           WHERE NOT EXISTS (SELECT 1 FROM AppBundle:SubscriberOptOutDetails s WHERE p.id = s.user)');
                $netsubscribers = $query ->getSingleScalarResult();
            //count of subscribers this month
                $query1 = $em->createQuery('SELECT COUNT(p.id) 
                                            FROM AppBundle:SubscriberDetails p 
                                            WHERE NOT EXISTS (SELECT 1 FROM AppBundle:SubscriberOptOutDetails s WHERE p.id = s.user)
                                                AND month(p.datecreated) = month(now())
                                                AND year(p.datecreated) = year(now())');
                $netsubscribersmnth = $query1 ->getSingleScalarResult();
        ///MONTHLY UNSUBSCRIBERS DATA//////////////
            //total unsubscribed
                $query2 = $em->createQuery('SELECT COUNT(p.id) 
                                            FROM AppBundle:SubscriberDetails p 
                                            WHERE EXISTS (SELECT 1 FROM AppBundle:SubscriberOptOutDetails s WHERE p.id = s.user)');
                $unsubscribers = $query2 ->getSingleScalarResult();
            //total unsubscribed this month
                $query3 = $em->createQuery('SELECT COUNT(p.id) 
                                            FROM AppBundle:SubscriberDetails p 
                                            WHERE EXISTS (SELECT 1 FROM AppBundle:SubscriberOptOutDetails s 
                                                            WHERE p.id = s.user
                                                            AND month(s.optoutdate) = month(now())
                                                            AND year(s.optoutdate) = year(now()))');
                $unsubscribedmnth = $query3 ->getSingleScalarResult();
        ///MONTHLY CAMPAIGNS DATA//////////////////////
            //total campaigns sent
                $query4 = $em->createQuery('SELECT COUNT(c.id) FROM AppBundle:Campaigns c');
                $totalcampaignssent = $query4 ->getSingleScalarResult();

            //campaigns sent this month
                $query5 = $em->createQuery('SELECT COUNT(c.id) 
                                            FROM AppBundle:Campaigns c 
                                            WHERE month(c.sendDate) = month(now())
                                                AND year(c.sendDate) = year(now())');
                $campaignssentmnth = $query5 ->getSingleScalarResult();
        //MONTHLY EMAILS DATA
            //emails sent total
                $query7 = $em->createQuery('SELECT COUNT(s.id) 
                                            FROM AppBundle:Subscribers s, AppBundle:Lists l, AppBundle:Campaigns c 
                                            WHERE s.list = l.id 
                                                AND l.id = c.lists 
                                            ');
                $totalemailssent = $query7 ->getSingleScalarResult();
            //emails sent this month
                $query8 = $em->createQuery('SELECT COUNT(s.id) 
                                            FROM AppBundle:Subscribers s, AppBundle:Lists l, AppBundle:Campaigns c 
                                            WHERE s.list = l.id 
                                                AND l.id = c.lists 
                                                AND month(c.sendDate) = month(now())
                                                AND year(c.sendDate) = year(now())');
                $emailssentmnth = $query8 ->getSingleScalarResult();
        ///CLICKS STATISTICS
        //total clicks generated
                $totalclicks = "";
                //total revenue
                $revenue = "";

        // check this year already exists//
        $curryear = date("Y");
        $currmonth = date("m");
        $currweek = date("W");
        $currday = date("d");

        $monthlystats = $em->getRepository('AppBundle:StatsMonthly')->findOneBy(['year' => $curryear, 'month' => $currmonth]);

        if (!$monthlystats) {
            $newMonthlystats ->setYear($curryear);
            $newMonthlystats ->setMonth($currmonth);
            $newMonthlystats ->setWeek($currweek);
            $newMonthlystats ->setDay($currday);
            $newMonthlystats ->setDate(new DateTime());
            $newMonthlystats ->setSubscribers($netsubscribers);
            $newMonthlystats ->setSubscribersperiod($netsubscribersmnth);
            $newMonthlystats ->setUnsubscribers($unsubscribers);
            $newMonthlystats ->setUnsubscribersperiod($unsubscribedmnth);
            $newMonthlystats ->setCampaignssent($totalcampaignssent);
            $newMonthlystats ->setCampaignsperiod($campaignssentmnth);
            $newMonthlystats ->setEmailssent($totalemailssent);
            $newMonthlystats ->setEmailssentperiod($emailssentmnth);
            $newMonthlystats ->setClicks($totalclicks);
            $newMonthlystats ->setClicksperiod($totalclicks);
            $newMonthlystats ->setRevenue($revenue);
            $newMonthlystats ->setRevenueperiod($revenue);
            $newMonthlystats ->setDatemodified(new DateTime());
            $em->persist($newMonthlystats);
            $em->flush();
        } else {
            $newMonthlystats = $em->getRepository('AppBundle:StatsMonthly')->findOneBy(['year' => $curryear, 'month' => $currmonth]);
            $newMonthlystats ->setWeek($currweek);
            $newMonthlystats ->setDay($currday);
            $newMonthlystats ->setDate(new DateTime());
            $newMonthlystats ->setSubscribers($netsubscribers);
            $newMonthlystats ->setSubscribersperiod($netsubscribersmnth);
            $newMonthlystats ->setUnsubscribers($unsubscribers);
            $newMonthlystats ->setUnsubscribersperiod($unsubscribedmnth);
            $newMonthlystats ->setCampaignssent($totalcampaignssent);
            $newMonthlystats ->setCampaignsperiod($campaignssentmnth);
            $newMonthlystats ->setEmailssent($totalemailssent);
            $newMonthlystats ->setEmailssentperiod($emailssentmnth);
            $newMonthlystats ->setClicks($totalclicks);
            $newMonthlystats ->setClicksperiod($totalclicks);
            $newMonthlystats ->setRevenue($revenue);
            $newMonthlystats ->setRevenueperiod($revenue);
            $newMonthlystats ->setDatemodified(new DateTime());
            $em->flush();
        }

        return new Response('<html><body>Monthly stats update</body></html>');
    }

    /**
     * @Route("/weeklystats", name="weeklystats")
     */
    public function weeklystatsAction(Request $request)
    {
        $newWeeklystats = new StatsWeekly();
        $em = $this ->getDoctrine() ->getManager();
        ///WEEKLY SUBSCRIBER DATA
            //total count of active subscribers to date
            $query = $em->createQuery('SELECT COUNT(p.id) 
                                       FROM AppBundle:SubscriberDetails p 
                                       WHERE NOT EXISTS (SELECT 1 FROM AppBundle:SubscriberOptOutDetails s WHERE p.id = s.user)');
            $netsubscribers = $query ->getSingleScalarResult();

            //total count of active subscribers this week
            $query1 = $em->createQuery('SELECT COUNT(p.id) 
                                        FROM AppBundle:SubscriberDetails p 
                                        WHERE NOT EXISTS (SELECT 1 FROM AppBundle:SubscriberOptOutDetails s 
                                                            WHERE p.id = s.user
                                                            AND week(p.datecreated) = week(now())
                                                            AND month(p.datecreated) = month(now())
                                                            AND year(p.datecreated) = year(now()))');
            $netsubscribersweek = $query1 ->getSingleScalarResult();

        ///WEEKLY UNSUBSCRIBE DATA///////////////////
            //total count of unsubscribed users
            $query2 = $em->createQuery('SELECT COUNT(p.id) 
                                        FROM AppBundle:SubscriberDetails p 
                                        WHERE EXISTS (SELECT 1 FROM AppBundle:SubscriberOptOutDetails s WHERE p.id = s.user )');
            $unsubscribers = $query2 ->getSingleScalarResult();
            //unsubscribed this week
            $query3 = $em->createQuery('SELECT COUNT(p.id) 
                                        FROM AppBundle:SubscriberDetails p 
                                        WHERE EXISTS (SELECT 1 FROM AppBundle:SubscriberOptOutDetails s 
                                                        WHERE p.id = s.user
                                                        AND week(s.optoutdate) = week(now()))');
            $unsubscribedweek = $query3 ->getSingleScalarResult();

        ///WEEKLY CAMPAIGNS DATA//////////////////////
            //total campaigns sent
            $query4 = $em->createQuery('SELECT COUNT(c.id) FROM AppBundle:Campaigns c');
            $totalcampaignssent = $query4 ->getSingleScalarResult();
            //campaigns sent this week
            $query5 = $em->createQuery('SELECT COUNT(c.id) 
                                        FROM AppBundle:Campaigns c 
                                        WHERE
                                             week(c.sendDate) = week(now())
                                             AND month(c.sendDate) = month(now())
                                             AND year(c.sendDate) = year(now())
                                       ');
            $campaignssentweek = $query5 ->getSingleScalarResult();

        ///WEEKLY EMAILS DATA//////////////////////////
            //total emails sent
            $query6 = $em->createQuery('SELECT COUNT(s.id) 
                                        FROM AppBundle:Subscribers s, AppBundle:Lists l, AppBundle:Campaigns c 
                                        WHERE s.list = l.id AND l.id = c.lists');
            $totalemailssent = $query6 ->getSingleScalarResult();
            //emails sent last week
            $query7 = $em->createQuery('SELECT COUNT(s.id) 
                                            FROM AppBundle:Subscribers s, AppBundle:Lists l, AppBundle:Campaigns c 
                                            WHERE s.list = l.id AND l.id = c.lists AND week(c.sendDate) = week(now())');
            $emailssentweek = $query7 ->getSingleScalarResult();
        ///WEEKLY CLICKS DATA//////////////////////////    
            //total clicks generated
            $totalclicks = "";
            //total revenue
            $revenue = "";

        // check this year already exists//
        $curryear = date("Y");
        $currmonth = date("m");
        $currweek = date("W");
        $currday = date("d");

        $weeklystats = $em->getRepository('AppBundle:StatsWeekly')->findOneBy(['year' => $curryear, 'week' => $currweek]);

        if (!$weeklystats) {
            $newWeeklystats ->setYear($curryear);
            $newWeeklystats ->setMonth($currmonth);
            $newWeeklystats ->setWeek($currweek);
            $newWeeklystats ->setDay($currday);
            $newWeeklystats ->setDate(new DateTime());
            $newWeeklystats ->setSubscribers($netsubscribers);
            $newWeeklystats ->setSubscribersperiod($netsubscribersweek);
            $newWeeklystats ->setUnsubscribers($unsubscribers);
            $newWeeklystats ->setUnsubscribersperiod($unsubscribedweek);
            $newWeeklystats ->setCampaignssent($totalcampaignssent);
            $newWeeklystats ->setCampaignsperiod($campaignssentweek);
            $newWeeklystats ->setEmailssent($totalemailssent);
            $newWeeklystats ->setEmailssentperiod($emailssentweek);
            $newWeeklystats ->setClicks($totalclicks);
            $newWeeklystats ->setClicksperiod($totalclicks);
            $newWeeklystats ->setRevenue($revenue);
            $newWeeklystats ->setRevenueperiod($revenue);
            $newWeeklystats ->setDatemodified(new DateTime());
            $em->persist($newWeeklystats);
            $em->flush();
        } else {
            $newWeeklystats = $em->getRepository('AppBundle:StatsWeekly')->findOneBy(['year' => $curryear, 'week' => $currweek]);
            $newWeeklystats ->setDay($currday);
            $newWeeklystats ->setDate(new DateTime());
            $newWeeklystats ->setSubscribers($netsubscribers);
            $newWeeklystats ->setSubscribersperiod($netsubscribersweek);
            $newWeeklystats ->setUnsubscribers($unsubscribers);
            $newWeeklystats ->setUnsubscribersperiod($unsubscribedweek);
            $newWeeklystats ->setCampaignssent($totalcampaignssent);
            $newWeeklystats ->setCampaignsperiod($campaignssentweek);
            $newWeeklystats ->setEmailssent($totalemailssent);
            $newWeeklystats ->setEmailssentperiod($emailssentweek);
            $newWeeklystats ->setClicks($totalclicks);
            $newWeeklystats ->setClicksperiod($totalclicks);
            $newWeeklystats ->setRevenue($revenue);
            $newWeeklystats ->setRevenueperiod($revenue);
            $newWeeklystats ->setDatemodified(new DateTime());
            $em->flush();
        }

        return new Response('<html><body>Weekly Stats Update</body></html>');

    }

    /**
     * @Route("/dailystats", name="dailystats")
     */
    public function dailystatsAction(Request $request)
    {
        $newDailystats = new StatsDaily();
        $em = $this ->getDoctrine() ->getManager();

        //total count of active subscribers to date
        $query = $em->createQuery('SELECT COUNT(p.id) FROM AppBundle:SubscriberDetails p WHERE 
                      NOT EXISTS (SELECT 1 FROM AppBundle:SubscriberOptOutDetails s WHERE p.id = s.user )');
        $netsubscribers = $query ->getSingleScalarResult();

        //subscribers today
        $qb = $em ->createQueryBuilder();
        $qb
            -> select('count(s.id) as countsubscr')
            -> from('AppBundle\Entity\SubscriberDetails', 's')
            -> where('s.datecreated = now()')
        ;
        $subscriberstoday = $qb ->getQuery() ->getSingleScalarResult();

        //total unsubscribed
        $query = $em->createQuery('SELECT COUNT(p.id) FROM AppBundle:SubscriberDetails p WHERE 
                      EXISTS (SELECT 1 FROM AppBundle:SubscriberOptOutDetails s WHERE p.id = s.user )');
        $unsubscribers = $query ->getSingleScalarResult();

        //unsubscribed today
        $query = $em->createQuery('SELECT COUNT(p.id) FROM AppBundle:SubscriberDetails p WHERE 
                      EXISTS (SELECT 1 FROM AppBundle:SubscriberOptOutDetails s WHERE p.id = s.user AND p.datecreated = now())');
        $unsubscribedtoday = $query ->getSingleScalarResult();

        //total campaigns sent
        $query2 = $em->createQuery('SELECT COUNT(c.id) FROM AppBundle:Campaigns c');
        $totalcampaignssent = $query2 ->getSingleScalarResult();

        //total campaigns sent today
        $query2 = $em->createQuery('SELECT COUNT(c.id) FROM AppBundle:Campaigns c WHERE c.sendDate = now()');
        $campaignssenttoday = $query2 ->getSingleScalarResult();

        //emails sent today
        $query3 = $em->createQuery('SELECT COUNT(s.id) 
                                        FROM AppBundle:Subscribers s, AppBundle:Lists l, AppBundle:Campaigns c 
                                        WHERE s.list = l.id AND l.id = c.lists AND c.sendDate = now()');
        $totalemailssent = $query3 ->getSingleScalarResult();

        //emails sent today
        $query3 = $em->createQuery('SELECT COUNT(s.id) 
                                        FROM AppBundle:Subscribers s, AppBundle:Lists l, AppBundle:Campaigns c 
                                        WHERE s.list = l.id AND l.id = c.lists AND c.sendDate = now()');

        $emailssenttoday = $query3 ->getSingleScalarResult();

        //total clicks generated
        $totalclicks = "";
        //total revenue
        $revenue = "";

        // check this year already exists//
        $curryear = date("Y");
        $currmonth = date("m");
        $currweek = date("W");
        $currday = date("d");
        $dailystats = $em->getRepository('AppBundle:StatsDaily')->findOneBy(['year' => $curryear, 'month' => $currmonth, 'day' => $currday]);

        if (!$dailystats) {
            $newDailystats ->setYear($curryear);
            $newDailystats ->setMonth($currmonth);
            $newDailystats ->setWeek($currweek);
            $newDailystats ->setDay(date("d"));
            $newDailystats ->setDate(new DateTime());
            $newDailystats ->setSubscribers($netsubscribers);
            $newDailystats ->setSubscribersperiod($subscriberstoday);
            $newDailystats ->setUnsubscribers($unsubscribers);
            $newDailystats ->setUnsubscribersperiod($unsubscribedtoday);
            $newDailystats ->setCampaignssent($totalcampaignssent);
            $newDailystats ->setCampaignsperiod($campaignssenttoday);
            $newDailystats ->setEmailssent($totalemailssent);
            $newDailystats ->setEmailssentperiod($emailssenttoday);
            $newDailystats ->setClicks($totalclicks);
            $newDailystats ->setClicksperiod($totalclicks);
            $newDailystats ->setRevenue($revenue);
            $newDailystats ->setRevenueperiod($revenue);
            $newDailystats ->setDatemodified(new DateTime());
            $em->persist($newDailystats);
            $em->flush();
        } else {
            $newDailystats = $em->getRepository('AppBundle:StatsDaily')->findOneBy(['year' => $curryear, 'month' => $currmonth, 'day' => $currday]);
            $newDailystats ->setDate(new DateTime());
            $newDailystats ->setSubscribers($netsubscribers);
            $newDailystats ->setSubscribersperiod($subscriberstoday);
            $newDailystats ->setUnsubscribers($unsubscribers);
            $newDailystats ->setUnsubscribersperiod($unsubscribedtoday);
            $newDailystats ->setCampaignssent($totalcampaignssent);
            $newDailystats ->setCampaignsperiod($campaignssenttoday);
            $newDailystats ->setEmailssent($totalemailssent);
            $newDailystats ->setEmailssentperiod($emailssenttoday);
            $newDailystats ->setClicks($totalclicks);
            $newDailystats ->setClicksperiod($totalclicks);
            $newDailystats ->setRevenue($revenue);
            $newDailystats ->setRevenueperiod($revenue);
            $newDailystats ->setDatemodified(new DateTime());
            $em->flush();
        }

        return new Response('<html><body>Daily stats updated</body></html>');
    }

}