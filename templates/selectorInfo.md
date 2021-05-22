## Information Element IDs

> header

> aboutMeElem

> timelineElem

> imagesElem

> contactElem

## Profile image class

> profile-thumb

## Name, Occupation, Simple Intro, PhoneNum, E-mail, GitHub link IDs

> name  
> occupation
> intro  
> phone  
> e-mail  
> github

## 입력받을 내용

> header
>
> > profile-thumb image, name, occupation, simple intro
>
> aboutMeElem
>
> > phone, e-mail, github(link),  
> > +) and customized elements?
>
> timelineElem
>
> > timeline category  
> > title / subtitle / desc(기간) / body contents
>
> imagesElem
>
> > image / description
>
> contactElem
>
> > None, 위에서 입력받은 e-mail 정보 사용  
> > templates/3/mail.php 스크립트 파일 참고

## Timeline composition

형식 맞춰서 입력받기: Heading으로 카테고라이징 할 수 있고 + icon 제외하고 title/subtitle/body

Heading

```html
<li
   class="
    timeline-heading
    text-center
    animate-box
    "
>
   <div><h3>heading contents</h3></div>
</li>
```

Contents

li class = "animate-box timeline-inverted/timeline-unverted"

> timeline-badge: icon

> timeline-panel {  
> timeline-heading
>
> > timeline-title  
> > timeline-subtitle  
> > timeline-desc
>
> timeline-body  
>  }
