---
title: Types
---
graphs

===

[flow]
st=>start: Start plugin
e=>end: End
op1=>operation: Development|success
sub1=>subroutine: Add features|success
cond=>condition: It is cool?|invalid
io=>inputoutput: Update for users|calm

st->op1->cond
cond(yes)->io->e
cond(no)->sub1(right)->op1
[/flow]
[mermaid]
graph TD
  article
  subgraph data items
    article --> person
    article --> organization
    article --> event
    article --> creation
  end
  subgraph special collections
    article --> calendar
    article --> portfolio
  end
  calendar -.- event
  portfolio -.- creation

[/mermaid]

[mermaid]
graph LR

	article --- hierarchy
    hierarchy --- sibling
    hierarchy --- children
    hierarchy --- breadcrumbs
  article --- type
    type --- items
    type --- collections
    type --- schema
  article --- taxonomy
    taxonomy --- categories
    taxonomy --- tags

  click article callback "Tooltip for a callback"
  click type "http://www.github.com" "This is a tooltip for a link"

  classDef key fill:#F90,stroke:#333,stroke-width:4px
  class article key
[/mermaid]

<script>
    var callback = function(){
        alert('A callback was triggered');
    }
</script>

[mermaid]
gantt
    section Project A
    bid          :a1, 2019-01-01, 30d
    award     :after a1  , 20d

[/mermaid]
[mermaid]
gantt
       dateFormat  YYYY-MM-DD
       title GANTT chart

       section A section
       Completed task            :done,    des1, 2018-11-06,2018-11-08
       Active task               :active,  des2, 2018-11-09, 3d
       Future task               :         des3, after des2, 5d
       Future task2              :    des4, after des3, 5d

       section Critical tasks
       Completed task in the critical line :crit, done, 2018-11-06,24h
       Implement parser and jison          :crit, done, after des1, 2d
       Create tests for parser             :crit, active, 3d
       Future task in critical line        :crit, 5d
       Create tests for renderer           :2d
       Add to mermaid                      :1d

       section Documentation
       Describe gantt syntax               :active, a1, after des1, 3d
       Add gantt diagram to demo page      :after a1  , 20h
       Add another diagram to demo page    :doc1, after a1  , 48h

       section Last section
       Describe gantt syntax               :after doc1, 3d
       Add gantt diagram to demo page      :20h
       Add another diagram to demo page    :48h
[/mermaid]
