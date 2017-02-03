<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\CampaignInputDetails;
use AppBundle\Entity\Template;
use AppBundle\Form\InputType;
use AppBundle\Form\NewEmailType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
    /**
     * @Route("/{slug}", name="index", defaults={"slug" = false}, requirements={"slug": "\d+"})
     */
    public function indexAction(Request $request, $slug)
    {   
        //setting past month and year

        $currmonth = date("m");
        $currweek = date("W");

        //getting slug value
        if($slug == "1") { //daily stats
            $table = "AppBundle\Entity\StatsDaily";
            $where0 = "s.date = CURRENT_DATE()";
            $where1 = "s.date = CURRENT_DATE()-1";
            $where2 = "s.id LIKE '%'";
            $where3 = "s.id LIKE '%'";
            $period = 'daily';
        } elseif ($slug == "2") { //weekly stats
            $table = "AppBundle\Entity\StatsWeekly";
            $where0 = "s.week = week(now(),1)";
            if ($currweek == 1) {
                $where1 = "s.week = 52";
                $where2 = "s.year = year(now())-1";
                $where3 = "s.year = year(now())";
            } else {
                $where1 = "s.week = week(now(),1)-1";
                $where2 = "s.year = year(now())";
                $where3 = $where2;
            }
            $period = 'weekly';
        } elseif ($slug == "3") { //monthly stats
            $table = "AppBundle\Entity\StatsMonthly";
            $where0 = "s.month = month(now())";
            if($currmonth == 1) {
                $where1 = "s.month = 12";
                $where2 = "s.year = year(now())-1";
                $where3 = "s.year = year(now())";
            } else {
                $where1 = "s.month = month(now())-1";
                $where2 = "s.year = year(now())";
                $where3 = $where2;
            }
            $period = 'monthly';
        } elseif ($slug == "4") { //yearly stats
            $table = "AppBundle\Entity\StatsYearly";
            $where0 = "s.year = year(now())";
            $where1 = "s.year = year(now())-1";
            $where2 = "s.id LIKE '%'";
            $where3 = "s.id LIKE '%'";
            $period = 'annually';
        } else {
            $table = "AppBundle\Entity\StatsWeekly";
            $where0 = "s.week = week(now(),1)";
            if ($currweek == 1) {
                $where1 = "s.week = 52";
                $where2 = "s.year = year(now())-1";
                $where3 = "s.year = year(now())";
            } else {
                $where1 = "s.week = week(now(),1)-1";
                $where2 = "s.year = year(now())";
                $where3 = $where2;
            }
            $period = 'weekly';
        }

        $em = $this ->getDoctrine() ->getManager();

        ///////SUBSCRIBED USER DATA////////
            //total subscribers
            $qb0 = $em ->createQueryBuilder();
            $qb0
                -> select('s.subscribers')
                -> from($table, 's')
                -> where('s.date = CURRENT_DATE()')
            ;
            $countsubscr = $qb0 ->getQuery() ->getSingleScalarResult();
            
            //count total subscribers as off last period selected in the upper panel (yesterday,last,week,last month,last year)
            $qb1 = $em ->createQueryBuilder();
            $qb1
                -> select('s.subscribers')
                -> from($table, 's')
                -> where($where1)
                -> andwhere($where2)
            ;
            $countsubscrlw = $qb1 ->getQuery() ->getSingleScalarResult();
            //calculating % growth rate
            if ($countsubscrlw == 0 or $countsubscr == 0) {
                $weeklyratiototalsubsc = 0;
            } else {
                $weeklyratiototalsubsc = ($countsubscr/$countsubscrlw)*100 - 100;
            }

            ///////USERS SUBSCRIBED THIS PERIOD/////////////
            //subscribers added this period
            $qb2 = $em ->createQueryBuilder();
            $qb2
                -> select('s.subscribersperiod')
                -> from($table, 's')
                -> where($where0)
                -> andwhere($where3)
            ;
            $subscribedwtd = $qb2 ->getQuery() ->getSingleScalarResult();
            //subscribers created last period
            $qb3 = $em ->createQueryBuilder();
            $qb3
                -> select('s.subscribersperiod')
                -> from($table, 's')
                -> where($where1)
                -> andwhere($where2)
            ;
            $subscribedlw = $qb3 ->getQuery() ->getSingleScalarResult();
            //% calculation
            if ($subscribedlw == 0 OR $subscribedlw == 0) {
                $weeklyratiosubscr = 0;
            } else {
                $weeklyratiosubscr = ($subscribedwtd/$subscribedlw)*100-100;
            }

            ///////UNSUBSCRIBED USERS THIS PERIOD/////////////
            //UNsubscribers added this period
            $qb4 = $em ->createQueryBuilder();
            $qb4
                -> select('s.unsubscribersperiod')
                -> from($table, 's')
                -> where($where0)
                -> andwhere($where3)
            ;
            $unsubscribedwtd = $qb4 ->getQuery() ->getSingleScalarResult();
            //subscribers created last period
            $qb5 = $em ->createQueryBuilder();
            $qb5
                -> select('s.unsubscribersperiod')
                -> from($table, 's')
                -> where($where1)
                -> andwhere($where2)
            ;
            $unsubscribedlw = $qb5 ->getQuery() ->getSingleScalarResult();
            //% calculation
            if ($unsubscribedlw == 0 OR $unsubscribedwtd == 0) {
                $weeklyratiounsubscr = 0;
            } else {
                $weeklyratiounsubscr = ($unsubscribedwtd/$unsubscribedlw)*100-100;
            }

            ///////EMAILS THIS WEEK/////////////
            //campaigns sent this period
            $qb6 = $em ->createQueryBuilder();
            $qb6
                -> select('s.emailssentperiod')
                -> from($table, 's')
                -> where($where0)
                -> andwhere($where3)
            ;
            $emailssentwtd = $qb6 ->getQuery() ->getSingleScalarResult();
            //campaigns sent last period
            $qb7 = $em ->createQueryBuilder();
            $qb7
                -> select('s.emailssentperiod')
                -> from($table, 's')
                -> where($where1)
                -> andwhere($where2)
            ;
            $emailslw = $qb7 ->getQuery() ->getSingleScalarResult();
            //% calculation
            if ($emailssentwtd == 0 OR $emailslw == 0) {
                $weeklyratioemails = 0;
            } else {
                $weeklyratioemails = ($emailssentwtd/$emailslw)*100-100;
            }

            ///////REDIRECTS THIS WEEK/////////////
            //paid clicks current period
            $qb8 = $em ->createQueryBuilder();
            $qb8
                -> select('s.clicksperiod')
                -> from($table, 's')
                -> where($where0)
                -> andwhere($where3)
            ;
            $paidclickswtd = $qb8 ->getQuery() ->getSingleScalarResult();
            //paid clicks last period
            $qb9 = $em ->createQueryBuilder();
            $qb9
                -> select('s.clicksperiod')
                -> from($table, 's')
                -> where($where1)
                -> andwhere($where2)
            ;
            $paidclickslw = $qb9 -> getQuery()->getSingleScalarResult();

            //% calculation
            if ($paidclickswtd == 0 OR $paidclickslw == 0) {
                $weeklyratiopaidclicks = 0;
            } else {
                $weeklyratiopaidclicks = ($paidclickswtd/$paidclickslw)*100-100;
            }

            ///////REVENUE THIS WEEK////////////
            //revenue current period
            $qb10 = $em ->createQueryBuilder();
            $qb10
                -> select('s.revenueperiod')
                -> from($table, 's')
                -> where($where0)
                -> andwhere($where3)
            ;
            $revenuewtd = $qb10 ->getQuery() ->getSingleScalarResult();
            //revenue previous period
            $qb11 = $em ->createQueryBuilder();
            $qb11
                -> select('s.revenueperiod')
                -> from($table, 's')
                -> where($where1)
                -> andwhere($where2)
            ;
            $revenuelw = $qb11 ->getQuery() ->getSingleScalarResult();

            //% calculation
            if ($revenuewtd == 0 OR $revenuelw == 0) {
                $weeklyratiorevenue = 0;
            } else {
                $weeklyratiorevenue = ($revenuewtd/$revenuelw)*100-100;
            }
            
            ////////CALCULATING DATA FROM THE GRAPH/////////
            //calculating last n-th periods
            if ($period == 'daily') { //if we are showing data on daily bases - show current week only
                $timestamp = strtotime("last Monday");//selecting starting point
                for ($i = 0; $i < 7; $i++) {//selecting length of the period
                    //selecting required period
                        $weekday = strftime('%d/%m(%a)', $timestamp);
                        $ddate = strftime('%Y-%m-%d', $timestamp);
                    //selecting count of emails sent in that specific day
                        $qb5 = $em ->createQueryBuilder();
                        $qb5
                            -> select('d.emailssentperiod')
                            -> from('AppBundle\Entity\StatsDaily', 'd')
                            -> where('d.date = :ddate')
                            -> setParameters(['ddate' => date($ddate)])
                        ;
                        $emailssent = $qb5 ->getQuery() ->getOneOrNullResult();
                        $emailssent = $emailssent['emailssentperiod'];
                    //selecting count of campaigns sent in pecific day

                    //selecting count of clicks generated

                    //pushing above to an array
                    $emaildata[] = ['date' => $weekday, 'emailssent' => $emailssent];
                    $timestamp = strtotime('+1 day', $timestamp);
                }
            } elseif ($period == 'weekly') { //if weekly data selected - show current month in weeks
                $timestamp = strtotime("-1 month");
                for ($i = 0; $i < 8; $i ++) { 
                    $weeknum = strftime('%W(%Y)', $timestamp);
                    $wnum = strftime('%V', $timestamp);
                    //selecting count of emails sent in that specific day
                    $qb5 = $em ->createQueryBuilder();
                    $qb5
                        -> select('w.emailssentperiod')
                        -> from('AppBundle\Entity\StatsWeekly', 'w')
                        -> where('w.week = :wnum')
                        -> setParameters(['wnum' => $wnum])
                    ;
                    $emailssent = $qb5 ->getQuery() ->getOneOrNullResult();
                    $emailssent = $emailssent['emailssentperiod'];

                    //selecting count of campaigns sent in pecific day

                    //selecting count of clicks generated

                    //pushing above to an array
                    $emaildata[] = ['date' => $weeknum, 'emailssent' => $emailssent];
                    $timestamp = strtotime('+1 week', $timestamp);
                }
            } elseif ($period == 'monthly') { //if monthlydata selecte - show  data for current year only
                $timestamp = strtotime("-1 month");
                for ($i = 0; $i < 8; $i ++) { 
                    $weeknum = strftime('%m(%Y)', $timestamp);
                    $mnum = strftime('%m', $timestamp);
                    //selecting count of emails sent in that specific day
                    $qb5 = $em ->createQueryBuilder();
                    $qb5
                        -> select('m.emailssentperiod')
                        -> from('AppBundle\Entity\StatsMonthly', 'm')
                        -> where('m.month = :mnum')
                        -> setParameters(['mnum' => $mnum])
                    ;
                    $emailssent = $qb5 ->getQuery() ->getOneOrNullResult();
                    $emailssent = $emailssent['emailssentperiod'];

                    //selecting count of campaigns sent in pecific day

                    //selecting count of clicks generated

                    //pushing above to an array
                    $emaildata[] = ['date' => $weeknum, 'emailssent' => $emailssent];
                    $timestamp = strtotime('+1 month', $timestamp);
                }
            } else { //other select daily breakdown
                $timestamp = strtotime("-1 month");
                for ($i = 0; $i < 8; $i ++) { 
                    $weeknum = strftime('%m(%Y)', $timestamp);
                    $mnum = strftime('%m', $timestamp);
                    //selecting count of emails sent in that specific day
                    $qb5 = $em ->createQueryBuilder();
                    $qb5
                        -> select('m.emailssentperiod')
                        -> from('AppBundle\Entity\StatsMonthly', 'm')
                        -> where('m.month = :mnum')
                        -> setParameters(['mnum' => $mnum])
                    ;
                    $emailssent = $qb5 ->getQuery() ->getOneOrNullResult();
                    $emailssent = $emailssent['emailssentperiod'];

                    //selecting count of campaigns sent in pecific day

                    //selecting count of clicks generated

                    //pushing above to an array
                    $emaildata[] = ['date' => $weeknum, 'emailssent' => $emailssent];
                    $timestamp = strtotime('+1 month', $timestamp);
                }
            }

        return $this->render('BackEnd/index.html.twig',[
            'countsubscr' => $countsubscr,
                'weeklyratiototalsubsc' => $weeklyratiototalsubsc,
            'subscribedwtd' => $subscribedwtd,
                'weeklyratiosubscr' => $weeklyratiosubscr,
            'unsubscribedwtd' => $unsubscribedwtd,
                'weeklyratiounsubscr' => $weeklyratiounsubscr,
            'emailssentwtd' => $emailssentwtd,
                'weeklyratioemails' => $weeklyratioemails,
            'paidclickswtd' => $paidclickswtd,
                'weeklyratiopaidclicks' => $weeklyratiopaidclicks,
            'revenuewtd' => $revenuewtd,
                'weeklyratiorevenue' => $weeklyratiorevenue,
            'emaildata' => $emaildata,
            'period' => $period,
            '1' => $slug, 
            '2' => $slug,
            '3' => $slug,
            '4' => $slug
        ]);
    }

    /**
     * @Route("/emailcampaigns", name="emailcampaigns")
     */
    public function emailcampaignsAction(Request $request)
    {
        $newInputs = new CampaignInputDetails();

        $form = $this->createForm(InputType::class, $newInputs, [
            'action' => $this -> generateUrl('emailcampaigns'),
            'method' => 'POST'
        ]);

        $form->handleRequest($request);
        #GETTING FORM DATA
        if($form->isSubmitted() && $form->isValid()) {
            $partner_obj = $form['partnername']->getData();
                $partner = $partner_obj ->getID();
            $geo = $form['geo']->getData();

            #if partner is not ADK, collect data from below fields
            if ($partner != 5) {
                $app_obj = $form['resourcename']->getData();
                $app_id = $app_obj ->getID();
                $templateid = $form['templatename']->getData();
                $link1 = $form['link1']->getData();
                $link2 = $form['link2']->getData();
            }

            $numcampaigns = $form['numemails']->getData();
            $timezone = $form['timezone'] ->getData();
            $depdate = $form['datetosend'] ->getData();

            if($partner == 5) {
                $getcampaign = $this->get('api.adk');
                $subscriberst = $getcampaign -> ADKAction($numcampaigns, $timezone, $depdate);
            } else {
                $getcampaign = $this->get('gen.campaign');
                $subscriberst = $getcampaign -> campaignsAction($geo, $app_id, $templateid, $numcampaigns, $link1, $link2, $timezone, $depdate);
            }

            //calculate variable values for campaign ouput
                //Campaigns per Resource chart
                $em = $this ->getDoctrine() ->getManager();
                $qb = $em ->createQueryBuilder();
                $qb
                    -> select('a.appName, count(c.id) as campaigns')
                    -> from('AppBundle\Entity\SendyApps', 'a')
                    -> join('AppBundle\Entity\Campaigns', 'c', \Doctrine\ORM\Query\Expr\Join::WITH, 'a.id = c.app')
                    -> where('c.sent <> 1')
                    -> groupBy('a.appName');
                ;
                    $resourcestats = $qb ->getQuery() ->getArrayResult();

                //Campaigns per Resource chart
                $qb = $em ->createQueryBuilder();
                $qb
                    -> select('a.appName, count(s.id) as countsubscr')
                    -> from('AppBundle\Entity\SendyApps', 'a')
                    -> join('AppBundle\Entity\Campaigns', 'c', \Doctrine\ORM\Query\Expr\Join::WITH, 'a.id = c.app')
                    -> join('AppBundle\Entity\Subscribers', 's', \Doctrine\ORM\Query\Expr\Join::WITH, 'c.toSendLists = s.list')
                    -> where('c.sent <> 1')
                    -> groupBy('a.appName');
                ;
                    $resourceemails = $qb ->getQuery() ->getArrayResult();

                //per email domain data calculation

                //calculate email limit
                    //# emails sent + scheduled to be sent within next 24 hours
                    $query3 = $em->createQuery('SELECT COUNT(s.id) 
                                        FROM AppBundle:Subscribers s, AppBundle:Lists l, AppBundle:Campaigns c 
                                        WHERE 
                                            s.list = l.id 
                                            AND l.id = c.lists 
                                            AND day(c.sendDate) = day(now())');

                    $emailsused = $query3 ->getSingleScalarResult();
                    //total global limit
                    $emaillimit = '50000';
                    //global limit a day minus what is in the line or already sent today
                    if ($emailsused <> 0) {
                       $sendlimit = ($emailsused/$emaillimit) *100;
                    } else {
                        $sendlimit = 0;
                    }
            //generating successfull responce page
            return $this->render('BackEnd/emailcampaigns.html.twig',[
                'form'=>$form->createView(),
                'resourcestats' => $resourcestats,
                'resourceemails' => $resourceemails,
                'partnername' => $partner,
                'emaillimit' => $sendlimit
            ]);
        }

        return $this->render('BackEnd/emailcampaigns.html.twig',[
            'form'=>$form->createView()
        ]);
    }
    
    /**
    * @Route("/newemailtempl", name="newemailtempl")
    */
    public function newemailtemplAction(Request $request){
        
        $newTemplate = new Template();
        
        $form = $this->createForm(NewEmailType::class, $newTemplate, [
            'action' => $this -> generateUrl('newemailtempl'),
            'method' => 'POST'
        ]);
        
        if($form->isSubmitted() && $form->isValid()) {
            $app = $form['app']->getData();
            $tempname = $form['template_name']->getData();
            $htmltext = $form['htmltext']->getData();
            
            
        }
        
        return $this->render('BackEnd/newemailtempl.html.twig',[
            'form'=>$form->createView()
        ]);
         
    }
}