<?php

class Lego4 extends BaseLego implements LegoInterface
{
    public function get_unique_fields()
    {
        return [
            $this->generate_text('bloc_4_subheader', 'Subheader'),
            $this->generate_text('bloc_4_title', 'Title'),
            $this->generate_textarea('bloc_4_description', 'Description'),
            $this->generate_tab('bloc_4_1', 'Icon 1'),
            $this->generate_image('bloc_4_1_icon', 'Icon', '50x50'),
            $this->generate_text('bloc_4_1_title', 'Title'),
            $this->generate_textarea('bloc_4_1_description', 'Description'),
            $this->generate_cta('bloc_4_1')[0],
            $this->generate_cta('bloc_4_1')[1],
            $this->generate_cta('bloc_4_1')[2],
            $this->generate_tab('bloc_4_2', 'Icon 2'),
            $this->generate_image('bloc_4_2_icon', 'Icon', '50x50'),
            $this->generate_text('bloc_4_2_title', 'Title'),
            $this->generate_textarea('bloc_4_2_description', 'Description'),
            $this->generate_cta('bloc_4_2')[0],
            $this->generate_cta('bloc_4_2')[1],
            $this->generate_cta('bloc_4_2')[2],
            $this->generate_tab('bloc_4_3', 'Icon 3'),
            $this->generate_image('bloc_4_3_icon', 'Icon', '50x50'),
            $this->generate_text('bloc_4_3_title', 'Title'),
            $this->generate_textarea('bloc_4_3_description', 'Description'),
            $this->generate_cta('bloc_4_3')[0],
            $this->generate_cta('bloc_4_3')[1],
            $this->generate_cta('bloc_4_3')[2],
            $this->generate_tab('bloc_4_4', 'Icon 4'),
            $this->generate_image('bloc_4_4_icon', 'Icon', '50x50'),
            $this->generate_text('bloc_4_1_title', 'Title'),
            $this->generate_textarea('bloc_4_1_description', 'Description'),
            $this->generate_cta('bloc_4_4')[0],
            $this->generate_cta('bloc_4_4')[1],
            $this->generate_cta('bloc_4_4')[2],
        ];
    }

    public function get_fields_layout()
    {
        return [

            'key' => 'bloc_4_key',
            'name' => 'bloc_4',
            'label' => 'Bloc 4 - 4 icons',
            'display' => 'block',
            'sub_fields' => $this->get_unique_fields(),
            'min' => '',
            'max' => '',
        ];
    }
}