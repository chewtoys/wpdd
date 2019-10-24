<?php
namespace WPDD\Color\Lib;

class Section
{
    public function __construct($wp_customize, $args)
    {
        $wp_customize->add_section($args['name'], array(
            'panel' => $args['panel'],
            'title' => $args['title'],
            'description' => $args['description'],
            'capability' => $args['capability'],
            'priority' => $args['priority'],
        ));

        foreach ($args['controls'] as $control) {
            (new Control())->addControl($wp_customize, $args['name'], $control);
        }
    }
}
