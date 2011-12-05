<?php
namespace AirOS\DashboardBundle\Event;

final class DashboardEvents
{
	/**
	 * Init Dashboard Events
	 */
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

	/**
	 * Load Dashboard Events
	 */
    /**
     * The admin_dashboard.init event is thrown each time the system attempts to create
     * the admin desktop.
     *
     * The event listener receives an AirOS\DashboardBundle\Event\InitAdminDashboardEvent
     * instance.
     *
     * @var string
     */
    const LoadAdminDashboard = 'admin_dashboard.load';

    /**
     * The user_dashboard.init event is thrown each time the system attempts to create
     * the user desktop.
     *
     * The event listener receives an AirOS\DashboardBundle\Event\InitUserDashboardEvent
     * instance.
     *
     * @var string
     */
    const LoadUserDashboard = 'user_dashboard.load';

	/**
	 * Deploy Dashboard Events
	 */
    /**
     * The admin_dashboard.init event is thrown each time the system attempts to create
     * the admin desktop.
     *
     * The event listener receives an AirOS\DashboardBundle\Event\InitAdminDashboardEvent
     * instance.
     *
     * @var string
     */
    const DeployAdminDashboard = 'admin_dashboard.deploy';

    /**
     * The user_dashboard.init event is thrown each time the system attempts to create
     * the user desktop.
     *
     * The event listener receives an AirOS\DashboardBundle\Event\InitUserDashboardEvent
     * instance.
     *
     * @var string
     */
    const DeployUserDashboard = 'user_dashboard.deploy';
}
?>