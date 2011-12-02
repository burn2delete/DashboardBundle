<?php
namespace AirOS\DashboardBundle\Event;

final class DashboardEvents
{
    /**
     * The admin_dashboard.init event is thrown each time the system attempts to create
     * the admin desktop.
     *
     * The event listener receives an AirOS\DashboardBundle\Event\InitAdminDashboardEvent
     * instance.
     *
     * @var string
     */
    const InitAdminDashboard = 'admin_dashboard.init';

    /**
     * The user_dashboard.init event is thrown each time the system attempts to create
     * the user desktop.
     *
     * The event listener receives an AirOS\DashboardBundle\Event\InitUserDashboardEvent
     * instance.
     *
     * @var string
     */
    const InitUserDashboard = 'user_dashboard.init';
}
?>