<?php
/**
 * Contains the ModuleServiceProvider class.
 *
 * @copyright   Copyright (c) 2018 Attila Fulop
 * @author      Attila Fulop
 * @license     MIT
 * @since       2018-11-17
 *
 */

namespace Konekt\Krew\Providers;

use Konekt\Concord\BaseBoxServiceProvider;
use Konekt\Krew\Models\Employee;
use Menu;

class ModuleServiceProvider extends BaseBoxServiceProvider
{
    protected $models = [
        Employee::class
    ];

    protected $requests = [];

    protected $enums = [];

    public function register()
    {
        parent::register();
    }

    public function boot()
    {
        parent::boot();

        $this->registerEnumIcons();

//        if ($menu = Menu::get('appshell')) {
//            $menu->addItem('stift', __('Stift'));
//            $menu->addItem('projects', __('Projects'), ['route' => 'stift.project.index'])
//                ->data('icon', 'folder-star')
//                ->allowIfUserCan('list projects');
//
//            $menu->addItem('issues', __('Issues'), ['route' => ['stift.issue.index', 'status=open_issues']])
//                ->data('icon', 'check-circle-u')
//                ->allowIfUserCan('list issues');
//            $menu->addItem('time_reports', __('Time Reports'), ['route' => 'stift.worklog.index'])
//                ->data('icon', 'collection-text')
//                ->allowIfUserCan('list worklogs');
//        }
    }

    private function registerEnumIcons()
    {
//        $this->app['appshell.icon']->registerEnumIcons(
//            WorklogStateProxy::enumClass(),
//            [
//                WorklogState::RUNNING  => 'spinner',
//                WorklogState::PAUSED   => 'pause',
//                WorklogState::FINISHED => 'calendar-check',
//                WorklogState::APPROVED => 'check-all',
//                WorklogState::REJECTED => 'flash',
//                WorklogState::BILLED   => 'money'
//            ]
//        );
//
//        $this->app['appshell.icon']->registerEnumIcons(
//            IssueStatusProxy::enumClass(),
//            [
//                IssueStatus::TODO        => 'circle-o',
//                IssueStatus::IN_PROGRESS => 'spinner',
//                IssueStatus::DONE        => 'check-circle-u'
//            ]
//        );
    }
}
